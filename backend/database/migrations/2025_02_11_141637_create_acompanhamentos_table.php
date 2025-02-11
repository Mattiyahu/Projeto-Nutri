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
        Schema::create('acompanhamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('cadastros');
            $table->date('data_refeicao');
            $table->text('cafe_da_manha')->nullable();
            $table->text('lanche_manha')->nullable();
            $table->text('almoco')->nullable();
            $table->text('lanche_tarde')->nullable();
            $table->text('jantar')->nullable();
            $table->text('lanche_noite')->nullable();
            $table->text('quantidade_comida')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acompanhamentos');
    }
};
