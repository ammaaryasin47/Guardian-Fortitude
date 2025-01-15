<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function cart(Request $request)
    {
        return view('cart', [
        ]);
    }


    public function update(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|max:1024',  // Image validation
            'countrycode' => 'nullable|string|max:10',
            'contact' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'type' => 'nullable|string|max:255',
            'sector' => 'nullable|string|max:255',
            'nature' => 'nullable|string|max:255',
            'armsliscence' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'langprefer' => 'nullable|string|max:255',
            'commandprefer' => 'nullable|string|max:255',
            'updateprefer' => 'nullable|string|max:255',
            'pastthreats' => 'nullable|string',
        ]);
    
        // Get the currently authenticated user
        $user = $request->user();
    
        // Handle the profile picture upload
        if ($request->hasFile('picture')) {
            // Store the uploaded picture in the 'profile_pictures' directory
            $path = $request->file('picture')->store('profile_pictures', 'public');
           

            // Update the 'picture' field with the new file path
            $user->picture = $path;
        }
    
        // Update the user's information with the validated data
        $user->update($validated);
    
        // Redirect back with a success message
        return back()->with('status', 'Profile updated successfully!');
    }
    


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
