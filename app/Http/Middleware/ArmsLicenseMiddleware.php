<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArmsLicenseMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in and if armsliscence is NULL
        if (Auth::check() && Auth::user()->armsliscence == null) {
            return $next($request); // Allow access
        }

        // Redirect unauthorized users with an error message
        return redirect('/')->with('error', 'Unauthorized access! You need a valid arms license.');
    }
}
