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

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->status = 'Approved'; // Set status to approved
        $user->save();

    return redirect()->route('register.confirmation.success')->with('success', 'User approved successfully.');
    }

    public function reject($user_id)
    {
    $user = User::findOrFail($user_id);
    $user->status = 'Rejected'; // Set status to rejected
    $user->save();

    return redirect()->route('register.confirmation.failed ')->with('success', 'User rejected.');
    }

    public function updateServices(Request $request)
    {
        $validatedData = $request->validate([
            'users.*.user_id' => 'required|uuid',
            'users.*.personal_protection' => 'nullable|boolean',
            'users.*.asset_protection' => 'nullable|boolean',
            'users.*.surveillance_monitoring' => 'nullable|boolean',
            'users.*.site_security' => 'nullable|boolean',
            'users.*.training_consultation' => 'nullable|boolean',
            'users.*.emergency_extraction' => 'nullable|boolean',
            'users.*.special_assault_team' => 'nullable|boolean',
            'users.*.emergency_crisis_management' => 'nullable|boolean',
            'users.*.cyber_security' => 'nullable|boolean',
            'users.*.private_detectives' => 'nullable|boolean',
        ]);

        foreach ($validatedData['users'] as $userData) {
            $subscription = Subscription::where('user_id', $userData['user_id'])->first();
            if ($subscription) {
                $subscription->update($userData);
            }
        }

    }

}