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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('state');
            $table->unsignedBigInteger('delivery_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();
        
            // Agrega las restricciones de clave externa después de definir las columnas
            $table->foreign('delivery_id')->references('id')->on('delivery')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
