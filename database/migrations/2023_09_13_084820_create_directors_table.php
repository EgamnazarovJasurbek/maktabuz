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
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('name_oz');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('reception_time_oz');
            $table->string('reception_time_uz');
            $table->string('reception_time_ru');
            $table->string('reception_time_en');
            $table->string('phone')->numeric();
            $table->string('email');
            $table->string('biography_oz');
            $table->string('biography_uz');
            $table->string('biography_ru');
            $table->string('biography_en');
            $table->integer('category_id');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directors');
    }
};
