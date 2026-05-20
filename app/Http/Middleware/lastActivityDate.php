<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LastActivityDate
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        if ($user = Auth::user()) {
            $user->updateQuietly([
                'last_activity_date' => Carbon::today(),
            ]);
        }
        

        return $next($request);
    }
}