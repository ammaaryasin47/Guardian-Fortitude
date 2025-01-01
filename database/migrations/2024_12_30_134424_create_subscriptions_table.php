<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    public function up()
{
    Schema::create('subscriptions', function (Blueprint $table) {
        $table->id();
        $table->uuid('user_id'); // Use UUID to match users table
        $table->boolean('personal_protection')->default(false);
        $table->boolean('asset_protection')->default(false);
        $table->boolean('surveillance_monitoring')->default(false);
        $table->boolean('site_security')->default(false);
        $table->boolean('training_consultation')->default(false);
        $table->boolean('emergency_extraction')->default(false);
        $table->boolean('special_assault_team')->default(false);
        $table->boolean('emergency_crisis_management')->default(false);
        $table->boolean('cyber_security')->default(false);
        $table->boolean('private_detectives')->default(false);
        $table->date('personal_protection_valid_till')->nullable();
        $table->date('asset_protection_valid_till')->nullable();
        $table->date('surveillance_monitoring_valid_till')->nullable();
        $table->date('site_security_valid_till')->nullable();
        $table->date('training_consultation_valid_till')->nullable();
        $table->date('emergency_extraction_valid_till')->nullable();
        $table->date('special_assault_team_valid_till')->nullable();
        $table->date('emergency_crisis_management_valid_till')->nullable();
        $table->date('cyber_security_valid_till')->nullable();
        $table->date('private_detectives_valid_till')->nullable();
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
