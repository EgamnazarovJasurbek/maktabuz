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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name_oz');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('specialist_oz');
            $table->string('specialist_uz');
            $table->string('specialist_ru');
            $table->string('specialist_en');
            $table->string('class_time_oz');
            $table->string('class_time_uz');
            $table->string('class_time_ru');
            $table->string('class_time_en');
            $table->integer('category_id');
            $table->string('phone')->numeric();
            $table->string('email');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
