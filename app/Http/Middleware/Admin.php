<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = Null)
    {
        if(Auth::guard()->check() && User::isAdmin()) {
            return $next($request);
        }elseif (Auth::guard('')->check()){

            return redirect('/');
        }else{
            return redirect('adminlogin');
        }


    }
}
