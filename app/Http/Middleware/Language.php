<?php

namespace App\Http\Middleware;

use Closure;
use \Session;
use App;
use \Config;

class Language
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
//        if(\Session::has('locale')){
////            $locale = Session::get('locale', Config::get('app.locale'));
//            $locale = 'am';
//        }else{
////            $locale = 'en';
//            $locale = 'am';
//        }
//        $res = Services::all();
//        Session(['service' => $res]);
//        App::setlocale($locale);
//        return $next($request);
    }

}
