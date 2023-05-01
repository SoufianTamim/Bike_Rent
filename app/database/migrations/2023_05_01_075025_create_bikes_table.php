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
        Schema::create('bikes', function (Blueprint $table) {
            $table->id('bike_id');
            $table->string('name');
            $table->string('category');
            $table->string('type');
            $table->string('condition');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('size');
            $table->string('weight');
            $table->text('maintenance_history');
            $table->integer('available_quantity');
            $table->float('price');
            $table->string('location');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes');
    }
};
