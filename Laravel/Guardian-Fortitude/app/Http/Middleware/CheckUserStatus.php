<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Check if the user is authenticated and not on the login page
        if ($user && $request->route()->getName() !== 'login') {
            if ($user->status === 'Approved') {
                return $next($request); // Allow the request to proceed if approved
            } elseif ($user->status === 'Rejected') {
                Auth::logout(); // Log the user out if rejected
                return redirect()->route('register.confirmation.failed');
            } else {
                return redirect()->route('register.confirmation.waiting');
            }
        }

        return $next($request);
    }
}

