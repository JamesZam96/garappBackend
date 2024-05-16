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
    {Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->string('state');
        $table->unsignedBigInteger('service_id')->nullable(); // Agrega la columna service_id sin restricciones
        $table->unsignedBigInteger('product_id')->nullable()->default(null);
        $table->timestamps();
    
        // Agrega la restricción de clave externa después de haber creado la columna service_id
        $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
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
