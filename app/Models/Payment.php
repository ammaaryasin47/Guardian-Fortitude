<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Define the table (if it's not the default 'payments')
    protected $table = 'payments';

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'name',
        'cardnumber',
        'expdate',
        'cvv',
    ];

    // Automatically encrypt and decrypt sensitive fields
    protected $casts = [
        'cardnumber' => 'encrypted',
        'cvv' => 'encrypted',
    ];
}

