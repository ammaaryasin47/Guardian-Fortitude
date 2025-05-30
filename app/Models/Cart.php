<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
    ];


    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id'); 
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id'); 
    }
}
