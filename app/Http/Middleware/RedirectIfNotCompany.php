<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class RedirectIfNotCompany
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
            if (admin()->user_type_id !== 2 ) {
                // check if not admin
               return redirect()->route('login');
            }

        return $next($request);
    }
}
