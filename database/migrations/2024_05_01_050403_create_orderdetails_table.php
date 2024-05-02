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
            $table->id();
            $table->integer('quantity');
            $table->integer('unitprice');
            $table->integer('subtotal');
            $table->unsignedBigInteger('border_id')->unique();
            $table->unsignedBigInteger('bill_id')->unique();
            $table->unsignedBigInteger('productservice_id')->unique();
            $table->foreign('border_id')->references('idorder')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bill_id')->references('idbill')->on('bills')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('productservice_id')->references('idproductservice')->on('productservices')->onDelete('cascade')->onUpdate('cascade');
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
