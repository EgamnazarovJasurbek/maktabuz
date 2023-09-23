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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('name_oz');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('teacher_oz');
            $table->string('teacher_uz');
            $table->string('teacher_ru');
            $table->string('teacher_en');
            $table->string('class_oz');
            $table->string('class_uz');
            $table->string('class_ru');
            $table->string('class_en');
            $table->string('week_oz');
            $table->string('week_uz');
            $table->string('week_ru');
            $table->string('week_en');
            $table->string('time');
            $table->string('image');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
