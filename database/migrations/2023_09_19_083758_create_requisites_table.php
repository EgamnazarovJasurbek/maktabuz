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
        Schema::create('requisites', function (Blueprint $table) {
            $table->id();
            $table->string('title_oz');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('recipient_oz');
            $table->string('recipient_uz');
            $table->string('recipient_ru');
            $table->string('recipient_en');
            $table->string('bank_name_oz');
            $table->string('bank_name_uz');
            $table->string('bank_name_ru');
            $table->string('bank_name_en');
            $table->string('tin');
            $table->string('checkpoint');
            $table->string('bic');
            $table->string('account');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisites');
    }
};
