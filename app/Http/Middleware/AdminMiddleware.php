<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in and has 'admin' type
        if (Auth::check() && Auth::user()->type === 'Admin') {
            return $next($request); // Allow access
        }

        // Redirect unauthorized users
        return redirect('/')->with('error', 'Unauthorized access!');
    }
}
