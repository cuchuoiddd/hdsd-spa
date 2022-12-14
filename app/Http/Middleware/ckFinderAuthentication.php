<?php

namespace App\Http\Middleware;

use Closure;

class ckFinderAuthentication
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
        config(['ckfinder.authentication' => function() use ($request) {
            return true;
        }] );

        return $next($request);
    }
}
