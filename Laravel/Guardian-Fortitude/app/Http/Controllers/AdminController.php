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

    return redirect()->route('register.confirmation.success')->with('success', 'User approved successfully.');
    }

    public function reject($id)
    {
    $user = User::findOrFail($id);
    $user->status = 'Rejected'; // Set status to rejected
    $user->save();

    return redirect()->route('register.confirmation.failed ')->with('success', 'User rejected.');
    }


}
