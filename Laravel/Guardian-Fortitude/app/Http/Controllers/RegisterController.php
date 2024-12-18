<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


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
            $validatedData['picture'] = $request->file('picture')->store('profile_pictures', 'public');
        }
    
        // Store data in session or database
        session()->put('basic_info', $validatedData);
    
        return redirect()->route('registerdetails');
    }
    
    // ---------------------- DETAILS ----------------------------------------------

    public function storeAdditionalDetails(Request $request)
    {
    $validatedData = $request->validate([
        'sector' => 'required|string|max:255',
        'nature' => 'required|string|max:255',
        'armsliscence' => 'nullable|string|max:255',
        'publicprofile' => 'nullable|string|max:255',
        'address' => 'required|string|max:255',
    ]);

    // Store additional details in session
    session()->put('additional_details', $validatedData);

    return redirect()->route('registerpreferences');
    }

    // -------------------- PREFERENCES -------------------------------------------------
    public function storePreferences(Request $request)
{
    // Validate the third page data
    $validatedData = $request->validate([
        'langprefer' => 'nullable|string|max:255',
        'commandprefer' => 'nullable|string|max:255',
        'updateprefer' => 'nullable|string|max:255',
        'pastthreats' => 'nullable|string|max:255',
    ]);

    // Store preferences in session
    session()->put('preferences', $validatedData);

    // Combine all data from the session, using empty arrays as defaults if the session data is not set
    $userData = array_merge(
        session()->get('basic_info', []), // Default to empty array if 'basic_info' is not in session
        session()->get('additional_details', []), // Default to empty array if 'additional_details' is not in session
        session()->get('preferences', []) // Default to empty array if 'preferences' is not in session
    );


    // Create the user in the database
    User::create($userData);

    // Clear session data after user creation
    session()->forget(['basic_info', 'additional_details', 'preferences']);

    // Redirect to the confirmation success page
    return redirect()->route('register.confirmation.waiting');
}

}

