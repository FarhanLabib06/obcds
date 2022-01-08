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
        if(auth()->user()->active=='user' || auth()->user()->active=='donor'){
        return $next($request);
        }
        // else
        // {
        //     return redirect()->route('donorlogin')->with('error','Permission denied.');
        // }
    }
}
