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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->bigIncrements('idorderdetail');
            $table->integer('quantity');
            $table->integer('unitprice');
            $table->integer('subtotal');
            $table->unsignedBigInteger('idorder')->unique();
            $table->unsignedBigInteger('idbill')->unique();
            $table->unsignedBigInteger('idproductservice')->unique();
            $table->foreign('idorder')->references('idorder')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idbill')->references('idbill')->on('bills')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idproductservice')->references('idproductservice')->on('productservices')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetails');
    }
};
