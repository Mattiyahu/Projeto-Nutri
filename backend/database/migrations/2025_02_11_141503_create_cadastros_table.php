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
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('sexo');
            $table->date('data_nascimento');
            $table->decimal('peso_atual', 5, 2); // Alterado para ter 2 casas decimais
            $table->decimal('altura', 5, 2); // Alterado para ter 2 casas decimais
            $table->text('transtorno_mental')->nullable();
            $table->string('frequencia_sintomas')->nullable();
            $table->string('tratamento_atual')->nullable();
            $table->string('influencia_humor')->nullable();
            $table->text('alimentacao_atual')->nullable();
            $table->string('dieta_especifica')->nullable();
            $table->string('alergia_alimentar')->nullable();
            $table->text('detalhes_alergia')->nullable();
            $table->string('atividade_fisica')->nullable();
            $table->text('motivacao_alimentacao')->nullable();
            $table->text('motivacao_saude_mental')->nullable();
            $table->text('desafios_alimentacao')->nullable();
            $table->text('expectativa_app')->nullable();
            $table->string('frequencia_notificacoes')->nullable();
            $table->string('sentimento_refeicao')->nullable();
            $table->string('fome_ou_emocional')->nullable();
            $table->string('sentimento_pos_refeicao')->nullable();
            $table->string('agua_consumida')->nullable();
            $table->text('outras_bebidas_consumidas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastros');
    }
};
