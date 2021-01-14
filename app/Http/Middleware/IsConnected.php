<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsConnected
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
        if(empty(session("connection"))){
            return redirect('login');
        }

        return $next($request);
    }
}


