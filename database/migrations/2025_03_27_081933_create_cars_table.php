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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained('maker');
            $table->foreignId('model_id')->constrained('models');
            $table->integer('year');
            $table->integer('price');
            $table->string('vin',225);
            $table->integer('mileage');
            $table->foreignId('car_type_id')->constrained('car_types');
            $table->foreignId(column: 'user_id')->constrained('users');
            $table->foreignId('city_id')->constrained('cities');
            $table->string('address',225);
            $table->longText('description')->nullable();
            $table->string('phone',45);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
