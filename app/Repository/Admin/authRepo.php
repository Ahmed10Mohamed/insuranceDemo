<?php

namespace App\Repository\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponses;

class authRepo
{
    public function login($request){
        $user = User::where('email', '=', $request->email)->orWhere('userName',$request->email)->first();
     
        if($user === NULL)
        {
            return redirect()->back()->with('fail',"اسم المستخدم او البريد الالكترونى غير صحيح");
        }
        else if(!Hash::check($request->password, $user->password))
        {
            return redirect()->back()->with('fail',"كلمة المرور غير صحيحة");
        }elseif(!$user->isActive){
            return redirect()->back()->with('fail',"هذا الحساب غير نشط ");
        }elseif(!$user->isApprove){
            return redirect()->back()->with('fail',"هذا الحساب معطل");
        }
        $rememberMe = $request->rememberMe?true:false;
        Auth::guard('admin')->login($user, $rememberMe);
        if($user->user_type_id == 1){
            // this userType Admin
            return redirect()->route('Admin-Dashboard')->with('تم تسجيل الدخول بنجاح');
        }elseif($user->user_type_id == 2){
            // this userType Driver
            return redirect()->route('Company-Dashboard')->with('تم تسجيل الدخول بنجاح');

        }
    }
    public function register($request){
        $user = new User();
        $user->fullName = $request->fullName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->user_type_id = 2; // Assuming 1 is for admin
        $user->isApprove = false; // Set to false until approved by admin
        $user->save();
        $user->company()->create([
            'companyName' => $request->companyName,
        ]);

        return redirect()->route('login')->with('success', 'تم انشاء الحساب بنجاح فى انتظار موافقه الادمن');
    }   

    public function logout($request)
    {
        $this->guard()->logout();
        // $request->session()->invalidate();
        return redirect()->route('login')->with('تم تسجيل الخرور بنجاح');
    }
    private function guard()
    {
        return Auth::guard('admin');
    }


}
