<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->string('countrycode');
            $table->string('contact');
            $table->string('email');
            $table->string('password');
            $table->string('sector');
            $table->string('nature');
            $table->string('armsliscence');
            $table->string('publicprofile');
            $table->string('address');
            $table->string('langprefer')->nullable(); // Make langprefer nullable
            $table->string('commandprefer')->nullable();
            $table->string('updateprefer')->nullable();
            $table->string('pastthreats')->nullable();
            $table->string('type')->default("Customer");
            $table->string('status')->default('Pending'); // New column for status
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
