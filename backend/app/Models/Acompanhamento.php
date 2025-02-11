<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acompanhamento extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos via mass assignment
    protected $fillable = [
        'usuario_id',
        'data_refeicao',
        'cafe_da_manha',
        'lanche_manha',
        'almoco',
        'lanche_tarde',
        'jantar',
        'lanche_noite',
        'quantidade_comida',
    ];

    // Defina a relação com o modelo de Cadastro (se necessário)
    public function usuario()
    {
        return $this->belongsTo(Cadastro::class, 'usuario_id');
    }
}