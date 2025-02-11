<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'sexo' => 'required|in:masculino,feminino,outro',
            'data_nascimento' => 'required|date_format:Y-m-d',
            'peso_atual' => 'required|numeric|min:1',
            'altura' => 'required|numeric|min:0.1',
            'transtorno_mental' => 'nullable|string',
            'frequencia_sintomas' => 'nullable|string',
            'tratamento_atual' => 'nullable|string',
            'influencia_humor' => 'nullable|string',
            'alimentacao_atual' => 'nullable|string',
            'dieta_especifica' => 'nullable|string',
            'alergia_alimentar' => 'nullable|string',
            'detalhes_alergia' => 'nullable|string',
            'atividade_fisica' => 'nullable|string',
            'motivacao_alimentacao' => 'nullable|string',
            'motivacao_saude_mental' => 'nullable|string',
            'desafios_alimentacao' => 'nullable|string',
            'expectativa_app' => 'nullable|string',
            'frequencia_notificacoes' => 'nullable|string',
            'sentimento_refeicao' => 'nullable|string',
            'fome_ou_emocional' => 'nullable|string',
            'sentimento_pos_refeicao' => 'nullable|string',
            'agua_consumida' => 'nullable|string',
            'outras_bebidas_consumidas' => 'nullable|string',
        ]);
        
        // Criar e salvar o cadastro no banco
        $cadastro = Cadastro::create($request->all());

        // Retornar uma resposta em JSON
        return response()->json($cadastro, 201);
    }

    public function update(Request $request, $id)
    {
        // Encontrar o cadastro pelo ID
        $cadastro = Cadastro::findOrFail($id);

        // Atualizar os dados enviados (os campos podem vir separados)
        $cadastro->update($request->all());

        return response()->json($cadastro, 200);
    }
}
