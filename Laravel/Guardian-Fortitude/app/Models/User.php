<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

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
        'publicprofile',    // Add new fields
        'address',          // Add new fields
        'langprefer',       // Add new fields
        'commandprefer',    // Add new fields
        'updateprefer',     // Add new fields
        'pastthreats',      // Add new fields
    ];
}

