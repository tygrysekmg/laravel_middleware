<?php

namespace App\Http\Middleware;

use Closure;

class CheckYear
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
		echo "middelware test";
        return $next($request);
    }
}
