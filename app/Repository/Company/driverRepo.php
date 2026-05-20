<?php

namespace App\Repository\Vendor;

use App\Models\City;
use App\Models\Company;
use App\Models\Driver;
use App\Models\TruckSize;
use App\Models\TruckType;
use Illuminate\Support\Facades\DB;
use App\Interfaces\ImageVideoUpload;
use App\Models\User;

class driverRepo
{
    private ImageVideoUpload $ImageUpload;
    public function __construct(ImageVideoUpload $ImageUpload)
    {
        $this->ImageUpload = $ImageUpload;
    }
    public function index(){
        $all_data = Driver::with(['user','user.city','truckType','truckSize'])->where('company_id',admin()->company?->id)->orderBy('id','DESC')->paginate(20);
        return view('vendor-panel.pages.drivers.index',compact('all_data'));
    }
    public function create(){
       $truckTypes = TruckType::orderby('id', 'DESC')->get();
       $cities    = City::orderby('id','DESC')->get();
        return view('vendor-panel.pages.drivers.create',compact('truckTypes','cities'));

    }
    public function store($request)
    {
        DB::beginTransaction();

        try {
            // بيانات المستخدم
            $userData = $request->except([
                '_token', 'image', 'truck_type_id', 'truck_size_id',
                'carLicense', 'carImage', 'company_id', 'password'
            ]);

            $userData['password'] = bcrypt($request->password);
            $userData['user_type_id'] = 2;
            // رفع صورة المستخدم
            if ($request->hasFile('image')) {
                $userData['image'] = $this->ImageUpload->StoreImageSingle($request->file('image'), 'User');
            }

            $user = User::create($userData);

            // بيانات السائق
            $driverData = [
                'user_id' => $user->id,
                'truck_type_id' => $request->truck_type_id,
                'truck_size_id' => $request->truck_size_id,
                'company_id' => admin()->company?->id,
            ];

            // ملفات السائق
            $driverFiles = [
                'carLicense'       => 'Driver/carLicense',
                'carImage'         => 'Driver/carImage',
            ];

            foreach ($driverFiles as $field => $path) {
                if ($request->hasFile($field)) {
                    $driverData[$field] = $this->ImageUpload->StoreImageSingle($request->file($field), $path);
                }
            }

            Driver::create($driverData);

            DB::commit();

            return response()->json([
                'success' => true,
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

    public function edit($id)
    {
        $data = Driver::with(['user','user.city','truckType','truckSize'])->findOrfail($id);
       $companies =  Company::orderby('id','DESC')->get(['id','companyName']);

        $truckTypes = TruckType::orderby('id', 'DESC')->get();
        $cities    = City::orderby('id','DESC')->get();
        $truckSizes = TruckSize::where('truck_type_id',$data->truck_type_id)->get();
        return view('vendor-panel.pages.drivers.edit',compact('companies','truckTypes','cities','data','truckSizes'));

    }

    public function update($request, $driverId)
    {
        DB::beginTransaction();

        try {
            // Get the existing driver record
            $driver = Driver::findOrFail($driverId);
            $user = $driver->user;

            // Prepare updated user data
            $userData = $request->except([
                '_token', 'image', 'truck_type_id', 'truck_size_id',
                'carLicense', 'carImage','password'
            ]);

            // Update password only if provided
            if ($request->filled('password')) {
                $userData['password'] = bcrypt($request->password);
            }

            // Update profile image if provided
            if ($request->hasFile('image')) {
                $userData['image'] = $this->ImageUpload->UpdateImageSingle($request->file('image'), 'User',$user->image);
            }
            // Update the user
            $user->update($userData);

            // Prepare updated driver data
            $driverData = [
                'truck_type_id' => $request->truck_type_id,
                'truck_size_id' => $request->truck_size_id,
            ];

            // Driver documents and their paths
            $driverFiles = [
                'carLicense'       => 'Driver/carLicense',
                'carImage'           => 'Driver/carImage',
            ];

            // Handle document file updates if provided
          // Update driver file fields if new files are uploaded
            foreach ($driverFiles as $field => $path) {
                if ($request->hasFile($field)) {
                    // Get the old file path from the existing driver model
                    $oldFile = $driver->$field;

                    // Store the new file and replace the old one
                    $driverData[$field] = $this->ImageUpload->UpdateImageSingle(
                        $request->file($field),
                        $path,
                        $oldFile
                    );
                }
            }

            // Update the driver
            $driver->update($driverData);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Driver updated successfully.',
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the driver: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function destroy($id){
        $data = Driver::findOrfail($id);
        try {
            $data->destroy($id);
            DB::commit();
            return redirect()->back()->with('success','تم الحذف بنجاح');
        } catch (\Exception $e) {

            DB::rollback();
            return redirect()->back()->with('fail',$e->getMessage());
        }
    }
    public function getSizesByType($request)
    {
        $typeId = $request->get('type_id');

        $sizes = TruckSize::where('truck_type_id', $typeId)->select('id', 'name')->get();

        return response()->json($sizes);
    }

    public function changeTypeUser($request){
        $user = User::findOrFail($request->id);
        if($request->type === 'active'){
            $data['isActive'] = !$user->isActive;
        }else{
            $data['isApprove'] = !$user->isApprove;
        }
        $user->update($data);
    }

    public function getSpecialDrivers(){
        $userLat = admin()->latitude;
        $userLng = admin()->longitude;
            $all_data = User::where(function ($query) {
                $query->whereDoesntHave('driver.orders') // السائق لا يملك أي طلب
                    ->orWhereHas('driver.orders', function ($q) {
                        $q->where('order_statuses_id', 11); // جميع الطلبات منتهية
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
            ->paginate(20);
                    return view('vendor-panel.pages.drivers.specialDrivers',compact('all_data'));

    }


}