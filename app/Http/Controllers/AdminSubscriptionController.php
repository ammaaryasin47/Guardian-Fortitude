<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class AdminSubscriptionController extends Controller
{
    // Show the subscription form to the admin for a specific user
    public function edit($userId)
    {
        $user = User::findOrFail($userId); // Find the user
        $subscription = Subscription::where('user_id', $user->id)->first(); // Get the user's subscription

        if (!$subscription) {
            // If no subscription exists for the user, create an empty one
            $subscription = new Subscription([
                'user_id' => $user->id,
                'name' => $user->name,
            ]);
        }

        return view('admin.subscriptions.edit', compact('user', 'subscription'));
    }

    public function updateSubscription(Request $request, $userId)
    {
        // Validate input
        $request->validate([
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
    
        // Retrieve the user
        $user = User::findOrFail($userId);
        $subscription = $user->subscription;
    
        // Loop through each service and update it
        $services = [
            'personal_protection',
            'asset_protection',
            'surveillance_monitoring',
            'site_security',
            'training_consultation',
            'emergency_extraction',
            'special_assault_team',
            'emergency_crisis_management',
            'cyber_security',
            'private_detectives',
        ];
    
        $validTill = now()->addDays(365); // 365 days from now
    
        foreach ($services as $service) {
            // If the admin ticks the checkbox, set the service to true and update valid_till
            if ($request->input("users.{$userId}.{$service}") == true) {
                $subscription->$service = true;
                $subscription->{$service . '_valid_till'} = $validTill;
            } else {
                // If the checkbox is not ticked, set it to false and set valid_till to null
                $subscription->$service = false;
                $subscription->{$service . '_valid_till'} = null;
            }
        }
    
        // Save the updated subscription
        $subscription->save();
    
        return redirect()->route('admin.subscription.index')->with('success', 'Subscription updated successfully.');
    }
    
    
}
