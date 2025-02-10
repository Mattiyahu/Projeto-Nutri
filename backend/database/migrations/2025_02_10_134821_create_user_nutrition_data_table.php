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
        Schema::create('user_nutrition_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();  // Relaciona com a tabela 'users'
            $table->integer('calories');
            $table->string('meal_type'); // Café da manhã, almoço, jantar, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_nutrition_data');
    }
};
