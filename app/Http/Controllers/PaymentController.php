<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
        $referrer = $request->query('referrer', 'Unknown');

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if ($request->isMethod('post')) {
            return $this->processPayment($request);
        }

        return view('payment', compact('referrer'));
    }

    public function processPayment(Request $request)
    {
        
        // Validate the input fields
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cardnumber' => ['required', 'regex:/^\d{4} ?\d{4} ?\d{4} ?\d{4}$/'],
            'expdate' => ['required', 'regex:/^\d{2}\/\d{2}$/'],
            'cvv' => ['required', 'digits:3'],
            'user_id' => 'required|uuid',
            'referrer' => 'nullable|string',
            
        ]);

        // Create and save the payment record
        $payment = new Payment();
        $payment->user_id = $validated['user_id'];
        $payment->referrer = $validated['referrer'] ?? 'Unknown';
        $payment->name = $validated['name'];
        $payment->cardnumber = encrypt($validated['cardnumber']); // Encrypt sensitive data
        $payment->expdate = $validated['expdate'];
        $payment->cvv = encrypt($validated['cvv']); // Encrypt sensitive data
        $payment->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Payment processed successfully!');
    }

    public function show()
    {
        return view('paymentcomplete'); // 'payment' is the name of your Blade file
    }

}
