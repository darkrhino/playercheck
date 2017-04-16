<?php

namespace PlayerCheck\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use PC\Business\Business;

class IsBusinessMember
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
        $business = Business::find($request->id);
        if(! $request->user()->businesses->contains($business)){
            return Redirect::route('dashboard.index');
        }

        return $next($request);
    }
}
