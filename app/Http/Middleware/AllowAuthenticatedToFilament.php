<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowAuthenticatedToFilament
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Allow all authenticated users to access Filament admin
        if (auth()->check()) {
            return $next($request);
        }

        // If not authenticated, redirect to login
        return redirect()->route('login');
    }
}
