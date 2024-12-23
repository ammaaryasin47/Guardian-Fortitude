<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Extract email and password from the request
        $credentials = $request->only('email', 'password');
    
        // Log the credentials (except password for security reasons)
        \Log::info('Login attempt with email:', ['email' => $credentials['email']]);
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Get the authenticated user
            \Log::info('Authenticated user:', ['user' => $user]);
    
            // Check if the user is approved
            if ($user->status === 'Approved') {
                return redirect()->route('index'); // Redirect to the desired route
            } else {
                \Log::warning('User not approved:', ['user' => $user]);
                Auth::logout(); // Log out the user if not approved
                return redirect()->route('register.confirmation.failed');
            }
        }
    
        // Log invalid credentials
        \Log::warning('Invalid credentials provided:', ['email' => $credentials['email']]);
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    

    // Show the login form
    public function showLoginForm()
    {
        return view('/login'); // Make sure the view exists at resources/views/auth/login.blade.php
    }

}
