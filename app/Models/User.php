<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    // Ensure these properties are set
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'user_id';

    // Make status fillable
    protected $fillable = [
        // ... your other fields
        'status'
    ];

    // Add this to debug model events
    protected static function boot()
    {
        parent::boot();

        static::updating(function($user) {
            \Log::info("Model updating", [
                'original' => $user->getOriginal(),
                'changes' => $user->getDirty()
            ]);
        });
    }
}


