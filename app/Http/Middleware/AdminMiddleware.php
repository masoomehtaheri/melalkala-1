<?php

namespace App\Http\Middleware;

use App\Utility\userUtility;
use Closure;

class AdminMiddleware
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
        if(auth()->user()->role !== userUtility::ADMIN){
           return redirect('/');
        }
        return $next($request);
    }
}
