<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Use UUID as the primary key
            $table->uuid('user_id')->primary(); // Use UUID for user_id
            $table->string('name');
            $table->string('picture');
            $table->string('countrycode');
            $table->string('contact');
            $table->string('email')->unique(); // Ensure email is unique
            $table->string('password');
            $table->string('sector');
            $table->string('nature');
            $table->string('armsliscence');
            $table->string('type');
            $table->string('address');
            $table->string('langprefer')->nullable();
            $table->string('commandprefer')->nullable();
            $table->string('updateprefer')->nullable();
            $table->string('pastthreats')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
