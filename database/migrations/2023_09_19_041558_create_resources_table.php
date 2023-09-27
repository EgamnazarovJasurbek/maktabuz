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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name_oz');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('body_oz');
            $table->text('body_uz');
            $table->text('body_ru');
            $table->text('body_en');
            $table->text('info_oz');
            $table->text('info_uz');
            $table->text('info_ru');
            $table->text('info_en');
            $table->string('url');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
