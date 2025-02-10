<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // The table associated with the model (optional if your table is named 'products')
    protected $table = 'products';

    // The attributes that are mass assignable
    protected $fillable = [
        'name', 'description', 'price', 'category_id', 'stock_quantity', 'image_url'
    ];

    // The attributes that should be hidden for arrays (e.g., passwords or sensitive information)
    protected $hidden = [];

    // If your timestamps are not being used, you can disable them
    public $timestamps = true; // set to false if not using created_at/updated_at

    // If you have any relationships, you can define them here. Example:
    // A product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Example of a 'hasMany' relationship with CartItems, if applicable
    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}
