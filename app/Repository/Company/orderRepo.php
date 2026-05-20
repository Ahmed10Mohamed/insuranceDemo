<?php

namespace App\Repository\Vendor;

use App\Jobs\SendFirebaseNotification;
use App\Models\Company;
use App\Models\Driver;
use App\Models\TruckType;
use App\Models\TruckSize;
use App\Models\Order;
use App\Models\orderSpecial;
use App\Models\orderStatus;
use App\Models\TrackOrder;
use App\Models\User;
use App\Models\walletDriver;
use Illuminate\Support\Facades\DB;
use App\Services\driverWalletService;

class orderRepo
{
    public function changeStatus($request){
        $data = Order::findOrfail($request->orderId);
         DB::beginTransaction();
            try {
                $data->update(['order_statuses_id'=>$request->order_statuses_id]);
                $data->refresh();
                    // Create order tracking entry
                TrackOrder::create([
                    'order_id'          => $data->id,
                    'order_statuses_id' => $data->order_statuses_id,
                    'notes'             => $request['notes'] ?? null,
                    'truckType'         => 'changeStatus'
                ]);



                    $type = match ($data->order_statuses_id) {
                        4       => 'loadingGoods',
                        5       => 'startJourney',
                        10      => 'deliveryByDriver',
                        11      => 'DeliveryByCompany',
                        default => 'all',
                    };

                  

                if ($data->driver?->user?->fcmToken) {

                    $msg       = "تم تغير حالة الرحلة رقم ".$data->orderNum." إلى ".$data->orderStatus?->name." من قبل ".$data->company?->user->userName;
                    dispatch(new SendFirebaseNotification(
                        $data->driver?->user?->fcmToken,
                        'تغير الحالة',
                        $msg,
                        $data->driver?->user->id,
                        'driver',
                        'order',
                        $data->id,
                        $type

                    ));
                }
                if (admin()->fcmToken) {
                    $msg       = "لقد قمت بتغير الرحلة رقم ".$data->orderNum;
                    dispatch(new SendFirebaseNotification(
                        admin()->fcmToken,
                        'تغير الرحلة',
                        $msg,
                        admin()->id,
                        'company',
                        'order',
                        $data->id,
                        $type
                    ));
                }
                DB::commit();
            return redirect()->back()->with('success','تم تعديل البيانات بنجاح');

         } catch (\Exception $e) {
                 return redirect()->back()->with('fail',$e->getMessage());
            }
        // track order
    }
    public function liveDriverTrack(){
        return view('vendor-panel.pages.orders.track');
    }
    public function driversWithTrips()
    {
        $drivers = Driver::whereHas('orders', function ($q) {
            $q->where('company_id', admin()->company->id);
        })
        ->with([
            'user',
            'currentOrder' => function ($q) {
                $q->select(
                    'id',
                    'driver_id',
                    'start_latitude',
                    'start_longitude',
                    'end_latitude',
                    'end_longitude',
                    'order_statuses_id',
                    'company_id'
                )->with('orderStatus');
            }
        ])
        ->get()
        ->map(function ($driver) {
            return [
                'id' => $driver->id,
                'name' => $driver->user->userName,
                'status' => $driver->currentOrder?->orderStatus?->name ?? 'بدون حالة',
                'start_latitude' => $driver->currentOrder?->start_latitude,
                'start_longitude' => $driver->currentOrder?->start_longitude,
                'end_latitude' => $driver->currentOrder?->end_latitude,
                'end_longitude' => $driver->currentOrder?->end_longitude,
            ];
        });

    return response()->json($drivers);


    }

    public function driverTrack($driver)
    {
        return response()->json([
            'track_latitude' => $driver->user->latitude,
            'track_longitude' => $driver->user->longitude,
        ]);
    }

    public function index($request){
        $orderStatuses = orderStatus::whereIn('id',[3,4,5,7,10,11])->get();
        $orderStatusesMore = orderStatus::whereIn('id',[1,2,3,4,5,7,10,11])->get();
                $truckTypes = TruckType::orderby('id', 'DESC')->get();
        $companyId = admin()->company?->id;
        $all_data = Order::query()
        ->where('company_id', $companyId)
        ->with([
            'company', 'company.user', 'driver.user',
            'truckType', 'orderStatus', 'orderTrack'
        ])
        ->when($request->filled('startOrder') && $request->filled('endOrder'), function ($q) use ($request) {
            $q->whereBetween('startOrder', [$request->startOrder, $request->endOrder]);
        })
        ->when($request->filled('startOrder') && !$request->filled('endOrder'), function ($q) use ($request) {
            $q->where('startOrder', '>=', $request->startOrder);
        })
        ->when(!$request->filled('startOrder') && $request->filled('endOrder'), function ($q) use ($request) {
            $q->where('startOrder', '<=', $request->endOrder);
        })
        ->when($request->filled('truck_type_id'), fn ($q) =>
            $q->where('truck_type_id', $request->truck_type_id)
        )
        ->when($request->filled('order_statuses_id'), fn ($q) =>
            $q->where('order_statuses_id', $request->order_statuses_id)
        )
        ->orderByDesc('id')
        ->paginate(20);




        return view('vendor-panel.pages.orders.index',compact('all_data','orderStatuses','truckTypes','orderStatusesMore'));
    }

    public function create(){

        $truckTypes = TruckType::orderby('id', 'DESC')->get();
         $drivers   = Driver::where('company_id',admin()->company?->id)
         ->with(['user'])
         ->whereHas('user', function ($q) {
            $q->where(['isApprove'=> true,'isActive' => true]);
        })
         ->orderby('id', 'DESC')->get();
         $companies = Company::where('id', '!=', admin()->company?->id)
            ->whereHas('user', function ($q) {
                $q->where('isActive', true);
            })
            ->with(['user'])
            ->orderBy('id', 'DESC')
            ->get();
        return view('vendor-panel.pages.orders.create',compact('truckTypes','drivers','companies'));
    }
    public function store($request)
    {
        DB::beginTransaction();
        try {
            $route = DB::transaction(function () use ($request) {
                $orderData = $request->except('_token');

                if ($request->driver_id) {
                    $wallet = walletDriver::firstOrCreate(['driver_id' => $request->driver_id]);
                    $setting = setting();

                    if ($wallet->creditor >= $setting->price) {
                        throw new \Exception('لا يمكن اضافة هذا السائق إلى هذا الطلب لوجود مديونية عليه');
                    } else {
                        $walletService = new driverWalletService();
                        $walletService->updateWalletAfterOrder($wallet);
                    }
                }

                $lastOrderNum = DB::table('orders')->lockForUpdate()->max('orderNum');
                $nextOrderNum = ($lastOrderNum ?? 0) + 1;

                $orderData['price'] = $request->price ? str_replace(',', '', $request->price) : 0;
                $orderData['orderNum'] = $nextOrderNum;
                $orderData['company_id'] = admin()->company->id;
                $orderData['order_statuses_id'] = $request->driver_id ? 2 : 1;
                $orderData['track_latitude'] = $request->start_latitude;
                $orderData['track_longitude'] = $request->start_longitude;
                $orderData['track_address'] = $request->start_address;

                $order = Order::create($orderData);
                $type = 'newOrder';
                if ($request->driver_id) {
                    if ($order->driver?->user?->fcmToken) {
                        $msg = "تم اضافتك فى الرحلة رقم {$order->orderNum} من قبل " . admin()->userName;
                        dispatch(new SendFirebaseNotification(
                            $order->driver?->user?->fcmToken,
                            'رحلة جديدة',
                            $msg,
                            $order->driver?->user->id,
                            'driver',
                            'order',
                            $order->id,
                            $type
                        ));
                    }
                }

                if ($request->companyDataTo) {
                    if ($order->companyDataTo?->user?->fcmToken) {
                        $msg = "تم توجيه اليك رحلة رقم {$order->orderNum} من قبل " . admin()->userName;
                        dispatch(new SendFirebaseNotification(
                            $order->companyDataTo?->user?->fcmToken,
                            'رحلة جديدة',
                            $msg,
                            $order->companyDataTo?->user->id,
                            'company',
                            'order',
                            $order->id,
                            $type
                        ));
                    }
                }

                // ✅ إرجاع قيمة route من جوه الـ transaction
                return $request->specialOrder
                    ? route('Order.SpecialOrder', $order->id)
                    : route('Order.index');
            });
            DB::commit();

            return response()->json([
                'success' => true,
                'route'   => $route,
                'message' => 'تمت الإضافة بنجاح',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء الإضافة: ' . $e->getMessage(),
            ], 500);
        }
    }



    public function show($id,$request)
    {
        $from = $request->from;
        $data = Order::with(['orderStatus','orderTrack','orderTrack.orderStatus','company','company.user','driver','driver.user'])->findOrFail($id);
        $drivers   = Driver::where('company_id',admin()->company?->id)
        ->whereHas('user', function ($q) {
           $q->where(['isApprove'=> true,'isActive' => true]);
       })
        ->orderby('id', 'DESC')->get();
        $companies = Company::where('id', '!=', admin()->company?->id)
        ->whereHas('user', function ($q) {
            $q->where('isActive', true);
        })
        ->with(['user'])
        ->orderBy('id', 'DESC')
        ->get();

       return view('vendor-panel.pages.orders.show',compact('data','from','companies'));

    }
      public function edit($id)
    {
        $data = Order::findOrFail($id);
        $truckTypes = TruckType::orderby('id', 'DESC')->get();
        $drivers   = Driver::where('company_id',admin()->company?->id)
        ->whereHas('user', function ($q) {
           $q->where(['isApprove'=> true,'isActive' => true]);
       })
        ->orderby('id', 'DESC')->get();
        $truckSizes = TruckSize::where('truck_type_id',$data->truck_type_id)->get();
        $companies = Company::where('id', '!=', admin()->company?->id)
        ->whereHas('user', function ($q) {
            $q->where('isActive', true);
        })
        ->with(['user'])
        ->orderBy('id', 'DESC')
        ->get();
       return view('vendor-panel.pages.orders.edit',compact('truckTypes','drivers','data','truckSizes','companies'));

    }
    public function update($request,$id)
    {
        DB::beginTransaction();

        try {
            $orderData = $request->except(['_token']);
            $orderData['price'] = $request->price? str_replace(',', '', $request->price):0;

            $data = Order::findOrfail($id);
            $data->update($orderData);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'تمت التعديل بنجاح',
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء التعديل: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function destroy($id){
        $data = Order::findOrfail($id);
        try {
            $data->destroy($id);
            DB::commit();
            return redirect()->back()->with('success','تم الحذف بنجاح');
        } catch (\Exception $e) {

            DB::rollback();
            return redirect()->back()->with('fail',$e->getMessage());
        }
    }
    public function trackOrder($id){
        $data = Order::findOrfail($id);

        return view('vendor-panel.pages.orders.trackOrder',compact('data'));
    }
    public function sendOrderToCompany($id){
        $data = Order::findOrfail($id);
        return view('vendor-panel.pages.orders.sendOrderToCompany',compact('data'));    
    }

    public function ordersReceived(){
        $all_data = Order::with(['company','company.user','driver.user','truckType','truckSize','orderStatus'])->where('companyTo',admin()->company->id)->orderby('id', 'DESC')->paginate(20);
        return view('vendor-panel.pages.orders.ordersReceived',compact('all_data'));
    }

     public function getSpecialDrivers($orderId){
        $order = Order::findOrFail($orderId);
        $userLat = $order->start_latitude;
        $userLng = $order->start_longitude;
            $specialDrivers = User::with(['driver'])->where(function ($query) {
                $query->whereDoesntHave('driver.orders') // السائق لا يملك أي طلب
                    ->orWhereHas('driver.orders', function ($q) {
                        $q->whereIn('order_statuses_id', [11,14]); // جميع الطلبات منتهية
                    });
            })
            ->select('*')
            ->selectRaw("
                (
                    6371 * acos(
                        cos(radians(?)) * cos(radians(latitude)) *
                        cos(radians(longitude) - radians(?)) +
                        sin(radians(?)) * sin(radians(latitude))
                    )
                ) AS distance", [$userLat, $userLng, $userLat])
            ->having('distance', '<=', 50)
            ->IsOnline()
            ->where('user_type_id',2)
            ->orderBy('distance')
            ->with(['city:id,name','driver','driver.truckType','driver.truckSize','driver.company'])
            ->get();
          return view('vendor-panel.pages.orders.SpecialDrivers',compact('specialDrivers','order'));
    }
    public function updateSpecialOrder($request){
        $order = Order::findOrFail($request->orderId);
        $order->update(['isSpecial'=>true]);
          try{
            DB::beginTransaction();
              // specialDrivers
            if($request->specialDriver && is_array($request->specialDriver)){
                foreach($request->specialDriver as $driver){
                    $orderSpecial = orderSpecial::create([
                        'driver_id' => $driver,
                        'order_id'   => $order->id
                    ]);

                    // Send notification to driver
                    if ($fcm = optional($orderSpecial->driver?->user)->fcmToken) {
                        dispatch(new SendFirebaseNotification(
                            $fcm,
                            'رحلة مميزة',
                            "تم ترشيحك لرحلة رقم {$orderSpecial->order?->orderNum} من قبل " . admin()->userName,
                            $orderSpecial->driver->user->id,
                            'driver',
                            'order',
                            $orderSpecial->order?->id,
                            'SpecialOrder'
                        ));
                    }
                }
            }
            DB::commit();
             return response()->json([
                'success' => true,
                'message' => 'تمت اضافة سائق مخصوص بنجاح',
            ]);
          } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء اضافة سائق مخصوص: ' . $e->getMessage(),
            ], 500);

          }


    }

}