<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHealthDataController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AcompanhamentoController;

Route::get('/verificar-email/{email}', [App\Http\Controllers\AuthController::class, 'verificarEmail']);


Route::put('/cadastro/{id}', [CadastroController::class, 'update']);
Route::options('/acompanhamento', [AcompanhamentoController::class, 'options']);
Route::options('/cadastro', [CadastroController::class, 'options']);
Route::post('/cadastro', [CadastroController::class, 'store']);
Route::post('/acompanhamento', [AcompanhamentoController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/health-data', [UserHealthDataController::class, 'storeHealthData']);
    Route::post('/nutrition-data', [UserHealthDataController::class, 'storeNutritionData']);
});

Route::get('/', function () {
    return response()->json(['message' => 'Hello World!']);
});
Route::get('/teste', function () {
    return response()->json(['message' => 'API funcionando!']);
});

