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
        if(auth()->user()->role=='user' || auth()->user()->role=='donor')
        {
            return $next($request);
        }
       
            return redirect()->route('donorlogin')->with('error','Permission denied.');
        
    }
}
