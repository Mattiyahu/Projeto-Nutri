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
        Schema::create('user_health_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')  // Especifica a tabela users
                  ->onDelete('cascade');  // Exclui os dados de saúde quando o usuário for excluído
            $table->string('mental_health_status');
            $table->string('goals');
            $table->string('challenges');
            $table->string('motivation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_health_data');
    }
};
