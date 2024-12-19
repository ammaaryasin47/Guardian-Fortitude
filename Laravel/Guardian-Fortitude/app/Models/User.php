<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Add your fillable fields
    protected $fillable = [
        'name',
        'picture',
        'countrycode',
        'contact',
        'email',
        'password',
        'type',
        'sector',           // Add new fields
        'nature',           // Add new fields
        'armsliscence',     // Add new fields
        'address',          // Add new fields
        'langprefer',       // Add new fields
        'commandprefer',    // Add new fields
        'updateprefer',     // Add new fields
        'pastthreats',      // Add new fields
    ];

    // If you want to hash the password automatically on save
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Add any additional methods or relationships here
}
