<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            if (is_string($search)) {
                // Trim whitespace and remove duplicate spaces
                $cleanSearch = trim(preg_replace('/\s+/', ' ', $search));
                
                if (empty($cleanSearch)) {
                    // Ignore empty searches gracefully by removing it from the request
                    $request->request->remove('search');
                    $request->query->remove('search');
                } else {
                    $request->merge(['search' => $cleanSearch]);
                }
            }
        }
        
        return $next($request);
    }
}
