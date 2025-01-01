<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define the primary key
    protected $primaryKey = 'user_id';

    // If the primary key is not an auto-incrementing integer
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id', // Include user_id in fillable
        'name',
        'picture',
        'countrycode',
        'contact',
        'email',
        'password',
        'type',
        'sector',
        'nature',
        'armsliscence',
        'address',
        'langprefer',
        'commandprefer',
        'updateprefer',
        'pastthreats',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'user_id', 'user_id');
    }
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->user_id)) {
                $model->user_id = (string) Str::uuid(); // Generate a UUID
            }
        });
    }


}
