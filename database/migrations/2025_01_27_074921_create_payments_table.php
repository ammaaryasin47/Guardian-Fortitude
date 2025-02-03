<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id'); // Foreign key
            $table->string('referrer')->nullable();
            $table->string('name');
            $table->string('cardnumber'); // Encrypted
            $table->string('expdate'); // Stored as plain text (non-sensitive)
            $table->string('cvv'); // Encrypted
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

