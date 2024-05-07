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
            $table->unsignedBigInteger('deliveryman_id')->unique();
            $table->unsignedBigInteger('order_id')->unique();
            $table->foreign('deliveryman_id')->references('id')->on('deliverymen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
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
