<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHealthDataController;

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