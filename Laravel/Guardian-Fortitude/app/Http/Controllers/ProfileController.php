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

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'picture' => 'nullable|image|max:1024',
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

    $user = $request->user();
    if ($request->hasFile('picture')) {
        $path = $request->file('picture')->store('profile_pictures', 'public');
        $validated['picture'] = $path;
    }

    $user->update($validated);

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
