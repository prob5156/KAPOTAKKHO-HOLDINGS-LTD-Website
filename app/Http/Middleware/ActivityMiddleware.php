<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Log;

class ActivityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->check() ? auth()->user()->email : 'Guest';
        Log::info('Activity Log', [
            'route' => $request->route() ? $request->route()->getName() : 'unknown',
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
            'user' => $user,
            'timestamp' => now()->toDateTimeString(),
        ]);
        
        return $next($request);
    }
}
