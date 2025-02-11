<?php

namespace App\Http\Controllers;

use App\Models\Acompanhamento;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AcompanhamentoController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        // Validação dos dados
        $request->validate([
            'usuario_id' => 'required|exists:cadastros,id', // Verifica se o usuário existe
            'data_refeicao' => 'required|date', // Verifica se a data está no formato correto
            // Aqui você pode adicionar validações para os outros campos
        ]);

        // Criando o acompanhamento alimentar com os dados do request
        $acompanhamento = Acompanhamento::create([
            'usuario_id' => $request->usuario_id,
            'data_refeicao' => $request->data_refeicao,
            'cafe_da_manha' => $request->cafe_da_manha,
            'lanche_manha' => $request->lanche_manha,
            'almoco' => $request->almoco,
            'lanche_tarde' => $request->lanche_tarde,
            'jantar' => $request->jantar,
            'lanche_noite' => $request->lanche_noite,
            'quantidade_comida' => $request->quantidade_comida,
        ]);

        return response()->json([
            'message' => 'Acompanhamento registrado com sucesso!',
            'data' => $acompanhamento
        ], 201)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }

    public function options(): JsonResponse
    {
        return response()->json([], 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
}
