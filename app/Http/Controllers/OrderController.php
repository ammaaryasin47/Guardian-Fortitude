<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user
        $cartItems = Cart::where('user_id', $user->user_id)->with('product')->get();

        // Calculate the total price
        $totalAmount = $cartItems->sum(function ($item) {
            $itemTotal = (float)$item->price * $item->quantity; // Convert price to float
            \Log::info('Item total:', [
                'item_id' => $item->id,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'item_total' => $itemTotal,
            ]);
            return $itemTotal;
        });

        // Log the total amount for debugging
        \Log::info('Total amount calculated:', ['totalAmount' => $totalAmount]);

        $totalAmount = (int)$cartItems->sum(function ($item) {
            return (float)$item->price * $item->quantity;
        });
        $totalAmount = min($totalAmount, 1000000);
        // Pass data to the view
        return view('checkout', [
            'address' => $user->address,
            'email' => $user->email,
            'cartItems' => $cartItems,
            'totalAmount' => $totalAmount, // Ensure this is passed to the view
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

        // Get the authenticated user's UUID
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
        ]);

        \Log::info('Order created:', ['order' => $order]);

        // Redirect to the payment complete page
        return redirect()->route('paymentcomplete')->with('success', 'Order placed successfully!');
    }
}