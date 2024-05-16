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
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->integer('licenseNumber');
            $table->unsignedBigInteger('people_id')->nullable()->default(null);
            $table->unsignedBigInteger('vehicle_id')->nullable()->default(null);
            $table->timestamps();
        });
        Schema::table('delivery', function (Blueprint $table) {
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');          
            $table->foreign('vehicle_id')->references('id')->on('vehicle')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
