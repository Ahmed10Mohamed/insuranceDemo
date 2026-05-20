<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponses;

use Closure;

class Approve
{
    use ApiResponses;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

            if (!api()->isApprove ) {
                return $this->errorResponse( 'not_approve','الحساب غير فعال.', 403);
            }

        return $next($request);
    }
}
