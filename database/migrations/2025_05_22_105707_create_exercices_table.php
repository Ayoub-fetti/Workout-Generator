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
        Schema::create('exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('muscle_group', ['chest', 'legs', 'back', 'arms', 'core']);
            $table->enum('equipment', ['bodyweight', 'dumbbell', 'barbell', 'resistance_band']);
            $table->enum('difficulty', ['beginner', 'intermediate', 'advanced']);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
