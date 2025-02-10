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
            $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

            return view('cart', [
                'address' => $user->address,
                'email' => $user->email,
                'cartItems' => $cartItems,
            ]);
        } else {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    }


    public function addToCart(Request $request)
    {
        \Log::info("addToCart function hit", ['product_id' => $request->product_id]); // Log right at the beginning
        $userId = Auth::id();
        $productId = $request->product_id;
    
        // Check if the request body contains the product_id
        if (!$productId) {
            \Log::error("No product ID provided");
            return response()->json(['success' => false, 'message' => 'No product ID provided']);
        }
    
        // Log user info
        \Log::info("Authenticated user ID:", ['user_id' => $userId]);
    
        try {
            // Update this query to search by product_id instead of id
            $product = Product::where('product_id', $productId)->firstOrFail();
            \Log::info("Product found", ['product' => $product]);
        } catch (\Exception $e) {
            \Log::error("Error finding product: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Product not found']);
        }
    
        // Check if the product is already in the cart
        $cartItem = Cart::where('user_id', $userId)
                        ->where('product_id', $productId)
                        ->first();
    
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1,
                'price' => $product->price,
            ]);
        }
    
        return response()->json(['success' => true, 'message' => 'Product added to cart']);
    }

    // Remove a product from the cart
    public function removeFromCart($cartItemId)
    {
        $cartItem = Cart::find($cartItemId);
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true, 'message' => 'Product removed from cart']);
        }

        return response()->json(['success' => false, 'message' => 'Cart item not found']);
    }

    
}
