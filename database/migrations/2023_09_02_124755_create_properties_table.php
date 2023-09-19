<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('location_id');
            $table->mediumText('image')->nullable();
            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('location_id')->references('id')->on('location');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
