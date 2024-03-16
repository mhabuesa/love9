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
        Schema::create('quiz_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('qs1');
            $table->string('qs2');
            $table->string('qs3');
            $table->string('qs4');
            $table->string('qs5');
            $table->string('qs6');
            $table->string('qs7');
            $table->string('qs8');
            $table->string('qs9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_models');
    }
};
