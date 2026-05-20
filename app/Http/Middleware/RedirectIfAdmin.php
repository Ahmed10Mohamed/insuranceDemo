<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RedirectIfAdmin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */

    public function handle($request, Closure $next, $guard = 'admin')
    {
        Log::info('RedirectIfAdmin middleware triggered', [
            'url' => $request->fullUrl(),
            'is_admin' => Auth::guard($guard)->check()
        ]);

        if ($guard === 'admin' && Auth::guard($guard)->check() && $request->route()->getName() === 'login') {
            if(admin()->user_type_id == 1){
                // this userType Admin
                return redirect()->route('Admin-Dashboard');
            }elseif(admin()->user_type_id == 2){
                // this userType Driver
                return redirect()->route('Driver-Dashboard');
    
            }else{
                  // this userType Vendor
                 return redirect()->route('Vendor-Dashboard');
    
            }
        }

        return $next($request);
    }



}
