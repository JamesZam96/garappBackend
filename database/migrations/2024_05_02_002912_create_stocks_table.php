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
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('idstock');
            $table->unsignedBigInteger('idproductservice');
            $table->unsignedBigInteger('idcompany');
            $table->foreign('idproductservice')->references('idproductservice')->on('productservices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idcompany')->references('idcompany')->on('companies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
