<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class RedirectCompany
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
            if (admin()->user_type_id !== 1 ) {
                // check if not admin
                return redirect()->route('Company-Dashboard')->with('error','لا يمكن الوصول الي هذه الصفحة');
            }

        return $next($request);
    }
}
