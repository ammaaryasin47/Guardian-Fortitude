<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('ADMIN.index', compact('users'));
    }
    public function register(){
        return view ('ADMIN.tables-general');
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'Approved'; // Set status to approved
        $user->save();

        // Redirect to confirmation waiting page
        return redirect()->route('register.confirmation.waiting')->with('user_id', $user->id);
    }

    public function reject($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'Rejected'; // Set status to rejected
        $user->save();

        // Redirect to confirmation failed page
        return redirect()->route('register.confirmation.failed');
    }

}
