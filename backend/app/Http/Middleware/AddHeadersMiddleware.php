<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddHeadersMiddleware
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
        $response = $next($request);

        // Add your custom headers here
        $response->headers->set('Access-Control-Allow-Origin', '*'); // Adjust as needed
        $response->headers->set('X-Custom-Header', 'YourValue');

        return $response;
    }
}
