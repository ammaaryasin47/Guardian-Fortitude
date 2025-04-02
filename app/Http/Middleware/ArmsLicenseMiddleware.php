<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArmsLicenseMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and has an arms license
        if (Auth::check() && Auth::user()->armsliscence != null) {
            return $next($request); // Allow access
        }

        // Redirect unauthorized users with an error message
        return redirect('/products')->with('error', 'Unauthorized access! You need a valid arms license.');
    }
}