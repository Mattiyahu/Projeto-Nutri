<?php

use Inertia\Inertia;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::get('/cadastro', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/cadastro', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/verificar-email/{email}', [AuthController::class, 'verificarEmail'])->name('verificar.email');

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