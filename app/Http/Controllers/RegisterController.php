<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Subscription;


class RegisterController extends Controller
{
    public function register()
    {
        return view('REGISTER.REGISTER');
    }

    public function registerDetails()
    {
        return view('REGISTER.REGISTER-DETAILS');
    }

    public function registerPreferences()
    {
        return view('REGISTER.REGISTER-PREFERENCE');
    }

    public function registerLegal()
    {
        return view('REGISTER.REGISTER-LEGAL');
    }

    public function confirmationWaiting()
    {
        return view('REGISTER.CONFIRMATION-WAITING');
    }

    public function confirmationSuccess()
    {
        return view('REGISTER.CONFIRMATION-SUCCESS');
    }

    public function confirmationFailed()
    {
        return view('REGISTER.CONFIRMATION-FAILED');
    }

    //TO STORAGE

    public function storeBasicInfo(Request $request)
{
    // Validate the first page data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'countrycode' => 'required|string|max:5',
        'contact' => 'required|numeric|digits:10',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|min:8',
    ]);

    // Handle file upload for the profile picture
    if ($request->hasFile('picture')) {
        try {
            // Store the file and get its path
            $filePath = $request->file('picture')->store('profile_pictures', 'public');
            
            if (!$filePath) {
                throw new \Exception("Failed to store profile picture");
            }
            
            $url = Storage::url($filePath);
            $validatedData['picture'] = $url;
            
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['picture' => 'Failed to upload profile picture. Please try again.']);
        }
    } else {

        return redirect()->back()
            ->withInput()
            ->withErrors(['picture' => 'Profile picture is required']);
    }

    $validatedData['password'] = bcrypt($validatedData['password']);

    // Store data in session
    session()->put('basic_info', $validatedData);
    session()->put('basic_info_completed', true);

    return redirect()->route('registerdetails');
}

    
    // ---------------------- DETAILS ----------------------------------------------------------------------------

    public function storeAdditionalDetails(Request $request)
    {
    $validatedData = $request->validate([
        'sector' => 'required|string|max:255',
        'nature' => 'required|string|max:255',
        'armsliscence' => 'nullable|string|max:255',
        'publicprofile' => 'nullable|string|max:255',
        'address' => 'required|string|max:255',
        'type' => 'required|in:Customer,Admin,Manager,Employee',
    ]);

    // Store additional details in session
    session()->put('additional_details', $validatedData);

    session()->put('additional_details_completed', true); // Add this flag
    return redirect()->route('registerpreferences');

}

    // -------------------- PREFERENCES ---------------------------------------------------------------------------
    public function storePreferences(Request $request)
    {
    // Validate the form inputs
    $request->validate([
        'langprefer' => 'required|string',
        'commandprefer' => 'required|string',
        'updateprefer' => 'required|string',
        'pastthreats' => 'nullable|string',
    ]);

    // Store the preferences in the session or database
    $preferences = $request->only(['langprefer', 'commandprefer', 'updateprefer', 'pastthreats']);
    // Example: Save to session or database
    session(['preferences' => $preferences]);

    // Redirect to the next step
    session()->put('preferences_completed', true); // Add this flag
    return redirect()->route('register.legal');

}

    //<-------------------- STORE LEGAL ----------------------------------------------------------------------------->
    public function storeLegal(Request $request)
    {
        // Validate the checkbox
        $request->validate([
            'agree_to_terms' => 'required|accepted',
        ]);
    
        // Retrieve all data from the session
        $basicInfo = session('basic_info');
        $additionalDetails = session('additional_details');
        $preferences = session('preferences');
    
        if (!$basicInfo || !$additionalDetails || !$preferences) {
            return redirect()->route('register')->withErrors('Incomplete Registration Data.');
        }
    
        // Merge all data into a single array
        $userData = array_merge($basicInfo, $additionalDetails, $preferences, [
            'agree_to_terms' => true,
            'status' => 'Pending', // Default status for new users
        ]);
    
        // Generate a user_id (UUID) if not already set in $userData
        if (empty($userData['user_id'])) {
            $userData['user_id'] = (string) Str::uuid(); // Generate UUID for user_id
        }
    
        // Save the user data to the database
        $user = User::create($userData);
    
        // Create a default subscription for the user with valid_till set to 365 days from now
        $validTill = now()->addDays(365); // 365 days from now
    
        Subscription::create([
            'user_id' => $user->user_id, // Link the subscription to the user
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
        ]);
    
        // Clear session data
        $request->session()->forget([
            'basic_info_completed',
            'additional_details_completed',
            'preferences_completed'
        ]);
    
        // Redirect to the login page
        return redirect()->route('login')->with('success', 'Registration Completed! Please Log In.');
    }


    public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            auth()->user()->update(['picture' => $path]); // Update picture field
        }
    
        return back();
    }
    

}

