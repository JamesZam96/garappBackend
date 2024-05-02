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
        Schema::create('productservices', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('description');
            $table->integer('price');
            $table->String('category');
            $table->String('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productservices');
    }
};
