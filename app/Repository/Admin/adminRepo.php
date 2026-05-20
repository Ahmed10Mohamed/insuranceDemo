<?php

namespace App\Repository\Admin;

use Illuminate\Support\Facades\DB;
use App\Interfaces\ImageVideoUpload;
use App\Models\AdminPermission;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\select;

class adminRepo
{
    private ImageVideoUpload $ImageUpload;
    public function __construct(ImageVideoUpload $ImageUpload)
    {
        $this->ImageUpload = $ImageUpload;
    }
    public function index()
    {
        $all_data = User::where('id','!=',1)->where('user_type_id',1)->orderByDesc('id')->get();

        return view('admin-panel.pages.admin.index', [
            'all_data'     => $all_data,
        ]);
    }

    public function create(){

        return view('admin-panel.pages.admin.create');

    }
    public function store($request){
        $req_data = $request->except('_token','image','password','permission');
        DB::beginTransaction();
        try {
            if($request->has('image')){
                $req_data['image'] = $this->ImageUpload->StoreImageSingle($request->file('image'),'Admin');
            }
            $req_data['password'] = Hash::make($request->password);
              $data = User::create($req_data);
              if($request->permission)
              {
                  for($i = 0; $i < count($request->permission); $i++)
                  {
                      $adp = new AdminPermission;
                      $adp->user_id = $data->id;
                      $adp->permission = $request->permission[$i];
                      $adp->save();
                  }
              }

                    DB::commit();
            return response()->json(['success' => true, 'message' => 'Admin created successfully!']);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
         }
    }
    public function edit($id,$request){
        $data = User::findOrFail($id);
        return view('admin-panel.pages.admin.edit',compact('data'));
    }
    public function update($request,$id){
        $data     = User::find($id);
        $req_data = $request->except('_token','image','password','permission','_method');
        DB::beginTransaction();
        try {
            if($request->has('image')){
                $req_data['image'] = $this->ImageUpload->UpdateImageSingle($request->file('image'),'Admin',$data->image);
            }
            if($request->password){

                $req_data['password'] = Hash::make($request->password);
            }

            $data->update($req_data);
            $old_per = AdminPermission::where('user_id',$data->id)->get();
            foreach($old_per as $aa)
            {
                $aa->delete();
            }
             if($request->permission)
            {
                for($i = 0; $i < count($request->permission); $i++)
                {
                    $adp = new AdminPermission;
                    $adp->user_id = $data->id;
                    $adp->permission = $request->permission[$i];
                    $adp->save();
                }

            }
        DB::commit();
        return response()->json(['success' => true, 'message' => 'Admin updated successfully!']);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
         }
    }
      public function destroy($id)
    {
        $data = User::findOrFail($id);
        DB::beginTransaction();
        try {
            $this->ImageUpload->DeleteImageSingle($data->image);

            $data->delete();
            DB::commit();
            return redirect()->back()->with('success','deleted success');

        } catch (\Exception $e) {
            DB::rollback();
             return redirect()->back()->with('fail',$e->getMessage());
         }
    }


}
