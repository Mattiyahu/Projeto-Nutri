<?php

use Inertia\Inertia;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    HandlePrecognitiveRequests::class, // Middleware padrão do Laravel 11
    \Inertia\Middleware::class, // Middleware do Inertia.js
])->group(function () {
    Route::get('/home', function (Request $request) {
        return Inertia::render('Home'); // Renderiza a página 'Home' no Vue
    });
});

Route::get('/insert-data', [TestController::class, 'insertData']);