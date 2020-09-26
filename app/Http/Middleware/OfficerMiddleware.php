<?php

namespace App\Http\Middleware;

use Closure;

class OfficerMiddleware
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
        if(Auth::user()->usertype == 'loanofficer')
        {
            return $next($request);
        }
        else{
            return redirect('/home')->with('status', 'Loan Officer  Loging in');
        }
     }
    
}
