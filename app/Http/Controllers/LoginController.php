<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        \Log::info('Login attempt with email:', ['email' => $credentials['email']]);
    
        if (Auth::attempt($credentials,true)) {
            $request->session()->regenerate();
    
            $user = Auth::user();
            \Log::info('Authenticated user:', ['user' => $user]);
    
            if ($user->status === 'Approved') {
                return redirect()->route('index');
            } else {
                \Log::warning('User not approved:', ['user' => $user]);
                Auth::logout();
                return redirect()->route('register.confirmation.failed');
            }
        }
    
        \Log::warning('Invalid credentials provided:', ['email' => $credentials['email']]);
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    

    

    public function showLoginForm()
    {
        return view('/login');
    }

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

}
