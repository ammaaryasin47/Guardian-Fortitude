<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::where('user_id', auth()->id())
                 ->orderBy('created_at', 'desc')
                 ->paginate(10);
    
    return response()->view('ORDERS', [
        'orders' => $orders
    ]);
}

    public function store(Request $request)
    {
        \Log::info('Checkout form submitted:', $request->all());

        // Validate the form data
        $request->validate([
            'shipping_address' => 'required|string',
            'email' => 'required|email',
            'card_name' => 'required|string',
            'card_number' => 'required|string',
            'card_expiry' => 'required|string',
            'card_cvc' => 'required|string',
            'total_amount' => 'required|numeric',
        ]);

        // Get the authenticated user's ID
        $user_id = Auth::id();

        // Create a new order
        $order = Order::create([
            'user_id' => $user_id,
            'shipping_address' => $request->input('shipping_address'),
            'email' => $request->input('email'),
            'card_name' => $request->input('card_name'),
            'card_number' => $request->input('card_number'),
            'card_expiry' => $request->input('card_expiry'),
            'card_cvc' => $request->input('card_cvc'),
            'total_amount' => $request->input('total_amount'),
            'status' => 'pending', // Default status
        ]);

        \Log::info('Order created:', ['order' => $order]);

        return redirect()->route('paymentcomplete')->with('success', 'Order placed successfully!');
    }
}