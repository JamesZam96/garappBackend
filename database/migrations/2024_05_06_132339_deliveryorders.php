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
        Schema::create('deliveryorders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->String('state');
<<<<<<< HEAD:database/migrations/2024_05_06_132339_deliveryorders.php
            $table->unsignedBigInteger('deliveryman_id')->unique();
            $table->unsignedBigInteger('order_id')->unique();
            $table->foreign('deliveryman_id')->references('id')->on('deliverymen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->integer('quantity');
            $table->unsignedBigInteger('deliveryman_id')->unique();
            $table->unsignedBigInteger('order_order')->unique();
            $table->foreign('deliveryman_id')->references('id')->on('deliverymen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_order')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
>>>>>>> 052f78ff4da94da588fc70930b0daddf59fa695f:database/migrations/2024_05_02_002522_create_deliveryorders_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('deliveryorders');
    }
};
