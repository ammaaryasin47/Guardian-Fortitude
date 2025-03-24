<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function cart(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        if ($user) {
            $cartItems = Cart::where('user_id', Auth::user()->user_id)->with('product')->get();

            \Log::info('Cart items:', ['user_id' => Auth::id(), 'cartItems' => $cartItems->toArray()]);
            return view('cart', [
                'address' => $user->address,
                'email' => $user->email,
                'cartItems' => $cartItems,
            ]);
        } else {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    }

    public function showCart()
    {
        $userId = Auth::user()->user_id;

        $cartItems = Cart::where('user_id', $userId)
            ->join('products', 'cart.product_id', '=', 'products.product_id') 
            ->select('cart.*', 'products.name', 'products.image_url', 'products.price')
            ->get();

        \Log::info("Cart items fetched in showCart", ['cartItems' => $cartItems->toArray()]);

        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
{
    \Log::info('Before adding to cart', session()->all()); // Debug session before

    if (!auth()->check()) {
        \Log::warning('User is not authenticated!');
        return response()->json(['success' => false, 'message' => 'User not logged in'], 401);
    }

    $userId = auth()->id();
    $productId = $request->input('product_id');

    \Log::info('User ID:', ['user_id' => $userId]);
    \Log::info('Product ID:', ['product_id' => $productId]);
    \Log::info('Session Data:', session()->all()); // Debug session persistence

    // Check if product exists
    $product = Product::where('product_id', $productId)->first();
    if (!$product) {
        \Log::error('Product not found:', ['product_id' => $productId]);
        return response()->json(['success' => false, 'message' => 'Product not found']);
    }

    // Check if item already exists in cart
    $cartItem = Cart::where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->first();

    if ($cartItem) {
        $cartItem->quantity += 1;
        $cartItem->save();
        \Log::info('Updated cart item quantity:', ['cartItem' => $cartItem]);
    } else {
        $cartItem = Cart::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => 1,
            'price' => $product->price,
        ]);
        \Log::info('New cart item created:', ['cartItem' => $cartItem]);
    }

    \Log::info('After adding to cart', session()->all()); // Debug session after
    return response()->json(['success' => true, 'message' => 'Product added to cart']);
}

    // Remove a cart item
    public function remove($id)
{
    \Log::info('Removing cart item:', ['id' => $id, 'request' => request()->all()]);

        // Find the cart item by ID
        $cartItem = Cart::findOrFail($id);

        // Delete the cart item
        $cartItem->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }
    
}
