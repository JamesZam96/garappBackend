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
            $table->bigIncrements('idcustomer');
            $table->unsignedBigInteger('idperson')->unique();
            $table->unsignedBigInteger('idvehicle')->unique();
            $table->timestamps();
            $table->foreign('idperson')->references('idperson')->on('people')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idvehicle')->references('idvehicle')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');  
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
