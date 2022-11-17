<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use DB;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
class checkSession
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
        
        $lastActivty = DB::table('sessions')->select('last_activity')->where('id', session()->getId())->first();
        $session = DB::table('sessions')->select('id')->where('id', session()->getId())->first();
        if(!empty($lastActivty->last_activity) && (time() - $lastActivty->last_activity) > 30)
        {
            Session::getHandler()->destroy($session->id);
            $request->session()->regenerate();
            Auth::logout();          
            
        }
        
        return $next($request);
    }
}
