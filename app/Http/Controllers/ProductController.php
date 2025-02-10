<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // List all products
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Show a specific product by ID
    public function show($id)
    {
        $product = Product::find($id);
        
        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Product not found!'], 404);
        }
    }

    // Create a new product
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'stock_quantity' => $request->input('stock_quantity'),
            'image_url' => $request->input('image_url'),
        ]);

        return response()->json($product, 201);
    }
}
