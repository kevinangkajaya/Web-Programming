<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class memberAuthCheck
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
        if(!Session::has("isLogin")){
            return redirect('/loginPage');
        }
        else{
            if(Session::get("role")!="member"){
                return redirect('/cloth');
            }
        }
        return $next($request);
    }
}
