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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('idorder');
            $table->date('date');
            $table->String('state');
            $table->unsignedBigInteger('idcustomer')->unique();
            $table->unsignedBigInteger('idbill')->unique();
            $table->foreign('idcustomer')->references('idcustomer')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idbill')->references('idbill')->on('bills')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
