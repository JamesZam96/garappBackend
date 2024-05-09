<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->String('state');
<<<<<<< HEAD:database/migrations/2024_05_06_132112_orders.php
            $table->unsignedBigInteger('service_id')->unique();
            $table->unsignedBigInteger('product_id')->unique();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->unsignedBigInteger('customer_id')->unique();
            $table->unsignedBigInteger('bill_id')->unique();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade')->onUpdate('cascade');
>>>>>>> 052f78ff4da94da588fc70930b0daddf59fa695f:database/migrations/2024_05_01_045808_create_orders_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('orders');
    }
};
