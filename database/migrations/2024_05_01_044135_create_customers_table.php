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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id')->unique();
            $table->unsignedBigInteger('vehicle_id')->unique();
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
<<<<<<< HEAD
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');  
=======
        
>>>>>>> 052f78ff4da94da588fc70930b0daddf59fa695f
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
