<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSubscriptionController extends Controller
{
    // Display the subscription details for the logged-in user
    public function show()
    {
        // Get the logged-in user
        $user = auth()->user(); // Or use Auth::user() for shorthand

        // Retrieve the user's subscription data
        $subscription = Subscription::where('user_id', $user->user_id)->first();

        // If no subscription is found, return an empty subscription or a default structure
        if (!$subscription) {
            $subscription = (object) [
                'personal_protection' => false,
                'asset_protection' => false,
                'surveillance_monitoring' => false,
                'site_security' => false,
                'training_consultation' => false,
                'emergency_extraction' => false,
                'special_assault_team' => false,
                'emergency_crisis_management' => false,
                'cyber_security' => false,
                'private_detectives' => false,
                'personal_protection_valid_till' => null,
                'asset_protection_valid_till' => null,
                'surveillance_monitoring_valid_till' => null,
                'site_security_valid_till' => null,
                'training_consultation_valid_till' => null,
                'emergency_extraction_valid_till' => null,
                'special_assault_team_valid_till' => null,
                'emergency_crisis_management_valid_till' => null,
                'cyber_security_valid_till' => null,
                'private_detectives_valid_till' => null,
            ];
        }

        // Pass the subscription data to the view
        return view('user.subscriptions.index', compact('subscription'));

    }

    public function showDashboard()
    {
        // Logic for loading the dashboard
        return view('dashboard');
    }

    public function updateServices(User $user, Request $request)
{
    $validated = $request->validate([
        'services' => 'required|array',
        'services.*' => 'boolean'
    ]);

    $subscription = $user->subscription ?? new Subscription();
    $subscription->user_id = $user->user_id;
    
    foreach ($validated['services'] as $service => $value) {
        $subscription->$service = $value;
    }
    
    $subscription->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Services updated successfully'
    ]);
}
}
