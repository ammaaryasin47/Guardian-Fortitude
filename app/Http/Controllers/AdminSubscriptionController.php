<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class AdminSubscriptionController extends Controller
{
    public function edit($userId)
    {
        \Log::info('Edit method called for user: '.$userId); // Debugging
        
        try {
            $user = User::findOrFail($userId);
            $subscription = Subscription::firstOrNew(
                ['user_id' => $userId],
                ['user_id' => $userId]
            );
            
            \Log::debug('User found:', ['user' => $user]);
            \Log::debug('Subscription:', ['subscription' => $subscription]);
            
            return view('ADMINPANEL.subscription-edit', compact('user', 'subscription'));
        } catch (\Exception $e) {
            \Log::error('Error in edit method: '.$e->getMessage());
            abort(500, 'Error loading subscription edit page');
        }
    }

    public function update(Request $request, $userId)
    {
        $validated = $request->validate([
            'personal_protection' => 'nullable|boolean',
            'asset_protection' => 'nullable|boolean',
            'surveillance_monitoring' => 'nullable|boolean',
            'site_security' => 'nullable|boolean',
            'training_consultation' => 'nullable|boolean',
            'emergency_extraction' => 'nullable|boolean',
            'special_assault_team' => 'nullable|boolean',
            'emergency_crisis_management' => 'nullable|boolean',
            'cyber_security' => 'nullable|boolean',
            'private_detectives' => 'nullable|boolean',
        ]);

        $subscription = Subscription::updateOrCreate(
            ['user_id' => $userId],
            $this->prepareSubscriptionData($validated)
        );

        return redirect()->route('admin.panel') // Changed to your admin panel route
            ->with('success', 'Subscription updated successfully!');
    }

    protected function prepareSubscriptionData($data)
    {
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

        $result = [];
        $validTill = now()->addYear();

        foreach ($services as $service) {
            $result[$service] = $data[$service] ?? false;
            $result[$service.'_valid_till'] = $data[$service] ? $validTill : null;
        }

        return $result;
    }
}