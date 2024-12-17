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
            $table->string('age');
            $table->string('picture');
            $table->string('countrycode');
            $table->string('contact');
            $table->string('email');
            $table->string('sector');
            $table->string('nature');
            $table->string('armsliscence');
            $table->string('publicprofile');
            $table->string('address');
            $table->string('langprefer');
            $table->string('commandprefer');
            $table->string('updateprefer');
            $table->string('pastthreats');
            $table->string('type')->default("Customer");
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
