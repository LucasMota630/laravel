<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// Rotas de usuário
Route::prefix('usuario')->group(function() {
    Route::post('registrar-se', [UsuarioController::class, 'registrar']);
    Route::post('login', [UsuarioController::class, 'login']);
    Route::post('logout', [UsuarioController::class, 'logout']);
    Route::post('desativar-conta', [UsuarioController::class, 'desativarConta']);
    Route::post('foto-upload', [UsuarioController::class, 'fotoUpload']); // ✅ rota correta
    Route::post('editar', [UsuarioController::class, 'editar']);
    Route::get('perfil', [UsuarioController::class, 'perfil']);
});

Route::middleware('auth:sanctum')->post('foto-upload', [UsuarioController::class, 'fotoUpload']);
