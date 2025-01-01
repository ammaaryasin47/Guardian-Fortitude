<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'subscriptions';

    // Specify the fillable fields
    protected $fillable = [
        'user_id',
        'personal_protection',
        'asset_protection',
        'surveillance_monitoring',
        'site_security',
        'training_consultation',
        'emergency_extraction',
        'special_assault_team',
        'emergency_crisis_management',
        'cyber_security',
        'private_detectives',
        'personal_protection_valid_till',
        'asset_protection_valid_till',
        'surveillance_monitoring_valid_till',
        'site_security_valid_till',
        'training_consultation_valid_till',
        'emergency_extraction_valid_till',
        'special_assault_team_valid_till',
        'emergency_crisis_management_valid_till',
        'cyber_security_valid_till',
        'private_detectives_valid_till',
    ];

    public function user()
        {
            return $this->belongsTo(User::class, 'user_id', 'user_id');
        }
    
}
