<?php

namespace App\Repository\Admin;

use App\Models\City;
use App\Models\Company;
use App\Models\TruckSize;
use App\Models\companySpecialization;
use Illuminate\Support\Facades\DB;
use App\Interfaces\ImageVideoUpload;
use App\Models\User;
use App\Models\TruckType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
class companyRepo
{
    private ImageVideoUpload $ImageUpload;
    public function __construct(ImageVideoUpload $ImageUpload)
    {
        $this->ImageUpload = $ImageUpload;
    }
    public function index(){
        $all_data = Company::with(['user'])->orderBy('id','DESC')->paginate(20);
        return view('admin-panel.pages.companies.index',compact('all_data'));
    }
    public function create(){
       $companySpecializations = companySpecialization::orderby('id', 'DESC')->get();
       $truckTypes   = TruckType::orderby('id','DESC')->get();
       $cities    = City::orderby('id','DESC')->get();
        return view('admin-panel.pages.companies.create',compact('companySpecializations','cities','truckTypes'));

    }

    public function store($request)
    {
        try {
            DB::transaction(function () use ($request) {
                $userData = Arr::except($request->all(), [
                    '_token', 'image', 'truck_type_id',
                    'companyName', 'companyType', 'commercialNumber',
                    'contactPerson', 'phonePerson', 'emailPerson', 'password','webSite'
                ]);

                $companyDat = DB::table('companies')->lockForUpdate()->max('generateNum');
                $nextCompanyNum = ($companyDat ?? 0) + 1;

                            // Hash the password
            $userData['password'] = Hash::make($request->password);

            // Assign user type (3 = company)
            $userData['user_type_id'] = 3;

            // Handle image upload if provided
            if ($request->hasFile('image')) {
                $userData['image'] = $this->ImageUpload->StoreImageSingle($request->file('image'), 'Company');
            }

            // Create the user
            $user = User::create($userData);

            // Create the company data associated with the user
            Company::create([
                'user_id'                   => $user->id,
                'generateNum'               => $nextCompanyNum,
                'truck_type_id'             => $request->truck_type_id,
                'companyName'               => $request->companyName,
                'companyType'               => $request->companyType,
                'commercialNumber'          => $request->commercialNumber,
                'contactPerson'             => $request->contactPerson,
                'phonePerson'               => $request->phonePerson,
                'emailPerson'               => $request->emailPerson,
                'webSite'                   => $request->webSite,
                'company_specialization_id' => $request->company_specialization_id,

            ]);


            });

            return response()->json([
                'success' => true,
                'message' => 'تمت الإضافة بنجاح',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء الإضافة: ' . $e->getMessage(),
            ], 500);
        }
    }

   

    public function edit($id)
    {
        $data = Company::with(['user','user.city','companySpecialization','truckSize'])->findOrfail($id);
        $companySpecializations = companySpecialization::orderby('id', 'DESC')->get();
        $cities    = City::orderby('id','DESC')->get();
        $truckTypes   = TruckType::orderby('id','DESC')->get();
        $truckSizes = TruckSize::where('truck_type_id',$data->truck_type_id)->get();
        return view('admin-panel.pages.companies.edit',compact('companySpecializations','cities','data','truckSizes','truckTypes'));

    }

    public function update($request, $companyId)
    {
        DB::beginTransaction();

        try {
            // Get the existing Company record
            $company = Company::findOrFail($companyId);
            $user = $company->user;

            // Prepare updated user data
            $userData = Arr::except($request->all(), [
                '_token', 'image', 'truck_type_id',
                'companyName', 'companyType', 'commercialNumber',
                'contactPerson', 'phonePerson', 'emailPerson','webSite','password'
            ]);


            // Update profile image if provided
            if ($request->hasFile('image')) {
                $userData['image'] = $this->ImageUpload->UpdateImageSingle($request->file('image'), 'Company',$user->image);
            }
            if ($request->filled('password')) {
                        // Hash the password
                $userData['password'] = Hash::make($request->password);

            }
            // Update the user
            $user->update($userData);
            $company->update([
                'truck_type_id'             => $request->truck_type_id,
                'companyName'               => $request->companyName,
                'companyType'               => $request->companyType,
                'commercialNumber'          => $request->commercialNumber,
                'contactPerson'             => $request->contactPerson,
                'phonePerson'               => $request->phonePerson,
                'emailPerson'               => $request->emailPerson,
                'webSite'                   => $request->webSite,
                'company_specialization_id' => $request->company_specialization_id,

            ]);



            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Company updated successfully.',
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the Company: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function destroy($id){
        $data = Company::findOrfail($id);
        try {
            $data->user->delete();
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
    public function loginAsUser($userId){
        $user = User::findOrFail($userId);
        // logout from your account first
        $this->guard()->logout();
        Auth::guard('admin')->login($user);

        return redirect()->route('Vendor-Dashboard')->with('success','تم تسجيل الدخول فى حساب '.$user->userName);
    }
    private function guard()
    {
        return Auth::guard('admin');
    }


}