<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next)
{
        
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        $user = Auth::user();

        // Check user status and proceed
        if ($user && $request->route() && $request->route()->getName() !== 'login') {
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

