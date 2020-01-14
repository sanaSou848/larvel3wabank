<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\facades\Auth;

class CheckActiveUser
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
        if(Auth::check()){
            if(Auth::user()->active_user == 0)
            {
                Auth::logout();
                return redirect()->route('login')->with('userInactive','votre compte est désactive');
            }
        }
        return $next($request);
    }
}
