<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // In the generated migration file (database/migrations/...)
public function up()
{
    Schema::table('orders', function (Blueprint $table) {
        // For DECIMAL (recommended for monetary values):
        $table->decimal('total_amount', 15, 2)->change();

        // OR for BIGINT:
        // $table->bigInteger('total_amount')->change();
    });
}
};
