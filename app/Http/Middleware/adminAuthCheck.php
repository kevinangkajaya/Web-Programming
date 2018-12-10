<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class adminAuthCheck
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
            if(Session::get("role")!="admin"){
                return redirect('/cloth');
            }
        }
        return $next($request);
    }
}
