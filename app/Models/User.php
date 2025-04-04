<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'user_id'; // Set primary key
    public $incrementing = false; // For UUID
    protected $keyType = 'string'; // For UUID

    protected $fillable = [
        'user_id',
        'name',
        'picture',
        'countrycode',
        'contact',
        'email',
        'type',
        'sector',
        'nature',
        'armsliscence',
        'address',
        'role',
        'status'
    ];

    // Add this if your pictures are stored in storage/app/public
    public function getPictureUrlAttribute()
    {
        return $this->picture ? asset('storage/'.$this->picture) : null;
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'user_id', 'user_id');
    }
}