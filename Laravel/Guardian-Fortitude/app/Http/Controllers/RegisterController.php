<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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
        // Store the file and get its path
        $filePath = $request->file('picture')->store('profile_pictures', 'public');
$url = Storage::url($filePath);
echo $url; // Outputs: /storage/profile_pictures/<filename>
        
        // Generate the URL for the file
        $validatedData['picture'] = Storage::url($filePath);
    }

    // Hash the password
    $validatedData['password'] = bcrypt($validatedData['password']);

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
        'type' => 'required|in:Customer,Admin,Manager,Employee',
    ]);

    // Store additional details in session
    session()->put('additional_details', $validatedData);

    return redirect()->route('registerpreferences');
    }

    // -------------------- PREFERENCES -------------------------------------------------
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
    return redirect()->route('register.legal'); // Adjust the route as needed
    }

    
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
        return redirect()->route('register')->withErrors('Incomplete registration data.');
    }

    // Merge all data into a single array
    $userData = array_merge($basicInfo, $additionalDetails, $preferences, [
        'agree_to_terms' => true,
        'status' => 'Pending', // Default status for new users
    ]);

    // Save the user data to the database
    $user = User::create($userData);

    // Clear session data
    session()->forget(['basic_info', 'additional_details', 'preferences']);

    // Redirect to the login page
    return redirect()->route('login')->with('success', 'Registration completed! Please log in.');
}




public function updateProfilePicture(Request $request)
    {
    $request->validate([
        'profile_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('profile_picture')) {
        $path = $request->file('profile_picture')->store('profile_pictures', 'public');
        auth()->user()->update(['profile_picture' => $path]);
    }

    return back();
    }

}

