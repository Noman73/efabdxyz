<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use URL;
use Auth;
class CheckPinVarified
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
        if(Auth::check()){
            if(auth()->user()->pin_no==null){
                return redirect(URL::to('pin-verify'));
            }
        }
        return $next($request);
    }
}
