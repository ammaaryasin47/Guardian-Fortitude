<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestMail;

class ServiceController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'services' => 'required|array|min:1',
        ]);

        $username = $request->input('username');
        $services = $request->input('services');

        // Send email to admin
        Mail::to('guardianfortitudeservice@gmail.com')->send(new ServiceRequestMail($username, $services));

        return redirect()->back()->with('success', 'Your service request has been submitted successfully.');
    }
}

