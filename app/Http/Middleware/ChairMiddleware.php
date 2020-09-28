<?php

namespace App\Http\Middleware;

use Closure;

class ChairMiddleware
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
        if(Auth::user()->usertype == 'chair')
        {
            return $next($request);
        }
        else{
            return redirect('/home')->with('status', 'Chair  Loging in');
        }
     }
    
}
