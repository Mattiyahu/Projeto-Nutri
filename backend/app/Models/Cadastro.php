<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'sexo',
        'data_nascimento',
        'peso_atual',
        'altura',
        'transtorno_mental',
        'frequencia_sintomas',
        'tratamento_atual',
        'influencia_humor',
        'alimentacao_atual',
        'dieta_especifica',
        'alergia_alimentar',
        'detalhes_alergia',
        'atividade_fisica',
        'motivacao_alimentacao',
        'motivacao_saude_mental',
        'desafios_alimentacao',
        'expectativa_app',
        'frequencia_notificacoes',
        'sentimento_refeicao',
        'fome_ou_emocional',
        'sentimento_pos_refeicao',
        'agua_consumida',
        'outras_bebidas_consumidas',
    ];
}
