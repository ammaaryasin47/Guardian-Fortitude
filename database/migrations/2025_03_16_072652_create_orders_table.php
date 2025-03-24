<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key for the orders table
            $table->uuid('user_id'); // UUID type for user_id
            $table->string('shipping_address');
            $table->string('email');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('card_expiry');
            $table->string('card_cvc');
            $table->decimal('total_amount', 8, 2);
            $table->timestamps();
    
            // Define foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
