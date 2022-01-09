<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->active=='1' || auth()->user()->active=='1')
        {
            return $next($request);
        }
       
            return redirect()->route('donorlogin')->with('error','Permission denied.');
        
    }
}
