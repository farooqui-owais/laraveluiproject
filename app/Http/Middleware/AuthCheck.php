<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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

        if(!session()->has('loggedUser')  && $request->path()!='login' && $request->path()!='register' ){
            return redirect()->route('login')->with('error','You must be logged in!');
        }
        if(session()->has('loggedUser')  && ($request->path() == 'login' || $request->path() == 'register')){
            return back();
         }

       /* if(!session()->has('loggedUser')  && $request->path()!='login' && $request->path()!='register' && $request->path()!='otplogin'  
        && $request->path()!='otpverification/{user_id}' && $request->path()!='otpgenerate'){
            return redirect()->route('login')->with('error','You must be logged in!');
        }
        if(session()->has('loggedUser')  && ($request->path() == 'login' || $request->path() == 'register' || $request->path()=='otplogin'  
        || $request->path()=='otpverification/{user_id}' || $request->path()=='otpgenerate')){
            return back();
         }*/
        return $next($request)->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
        ->header('Pragma','no-cache')
        ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
    }
}
