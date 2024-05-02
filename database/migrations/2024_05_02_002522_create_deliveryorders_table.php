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
        Schema::create('deliveryorders', function (Blueprint $table) {
            $table->bigIncrements('iddeliveryorder');
            $table->date('date');
            $table->String('state');
            $table->integer('quantity');
            $table->unsignedBigInteger('iddeliveryman')->unique();
            $table->unsignedBigInteger('idorder')->unique();
            $table->foreign('iddeliveryman')->references('iddeliveryman')->on('deliverymen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idorder')->references('idorder')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveryorders');
    }
};
