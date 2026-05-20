<?php

namespace App\Repository\Vendor;

use App\Models\Driver;
use App\Models\Company;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class mangementRepo
{
   public function mangementRepo($request )
    {
        $user = User::where('phone', $request->phone)->first();
        if (!$user) {
            return redirect()->route('Admin-Dashboard')->with('fail','المستخدم غير موجود');
        }
         Auth::guard('admin')->login($user);
        return redirect()->route('Vendor-Dashboard')->with('success','تم تسجيل الدخول فى حساب '.$user->userName);
    }    

}
