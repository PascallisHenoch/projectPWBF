<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() &&  Auth::user()->role == "admin") {
            return $next($request);
       }else if(Auth::user() && Auth::user()->role == "ortu"){
            return redirect('/ortu');
       }
       else if(Auth::user() && Auth::user()->role == "kader"){
        return redirect('/kader');
   }

       return redirect('/login')->with('error','Anda tidak punya akses');
    }
}
