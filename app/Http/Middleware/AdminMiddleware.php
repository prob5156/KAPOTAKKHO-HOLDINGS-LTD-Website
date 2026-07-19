<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the system.');
        }

        $user = auth()->user();

        // If user is not an admin, restrict access to admin routes and redirect to their profile
        if (!$user->isAdmin()) {
            return redirect()->route('profile')->with('warning', 'Access Restricted: Administrative management routes are reserved for System Administrators. You have been redirected to your user profile.');
        }
        
        return $next($request);
    }
}
//http://localhost:8000/admin/projects