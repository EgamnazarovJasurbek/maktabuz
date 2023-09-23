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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("title_1_uz");
            $table->string("title_1_oz");
            $table->string("title_1_ru");
            $table->string("title_1_en"); 
            $table->string("title_2_uz");
            $table->string("title_2_oz");
            $table->string("title_2_ru");
            $table->string("title_2_en"); 
            $table->text("body_oz");
            $table->text("body_uz");
            $table->text("body_ru");
            $table->text("body_en");
            $table->string('image');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
