<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TerminateMiddleware
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
        echo "Executing statements of handle method of TerminateMiddleware";
        return $next($request);
    }
   
    public function terminate($request, $response) {
        echo "<br>Executing statements of terminate method of TerminateMiddleware.";
    }
}
