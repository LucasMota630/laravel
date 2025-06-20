<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/veiculo/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-formulario');
Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');
Route::get('/veiculo/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('veiculo-listar');
Route::get('/veiculo/remove/{id}', [App\Http\Controllers\VeiculoController::class, 'remove'])->name('veiculo-remover');
Route::get('/veiculo/editar/{id}', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('veiculo-editar');

Route::get('/proprietario/formulario', [App\Http\Controllers\ProprietárioController::class, 'formulario'])->name('proprietario-formulario');
Route::post('/proprietario/store', [App\Http\Controllers\ProprietárioController::class, 'store'])->name('proprietario-store');
Route::get('/proprietario/listar', [App\Http\Controllers\ProprietárioController::class, 'listar'])->name('proprietario-listar');
Route::get('/proprietario/remove/{id}', [App\Http\Controllers\ProprietárioController::class, 'remove'])->name('proprietario-remover');
Route::get('/proprietario/editar/{id}', [App\Http\Controllers\ProprietárioController::class, 'editar'])->name('proprietario-editar');

Route::get('/anuncio/formulario', [App\Http\Controllers\AnúncioController::class, 'formulario'])->name('anuncio-formulario');
Route::post('/anuncio/store', [App\Http\Controllers\AnúncioController::class, 'store'])->name('anuncio-store');
Route::get('/anuncio/listar', [App\Http\Controllers\AnúncioController::class, 'listar'])->name('anuncio-listar');
Route::get('/anuncio/remove/{id}', [App\Http\Controllers\AnúncioController::class, 'remove'])->name('anuncio-remover');
Route::get('/anuncio/editar/{id}', [App\Http\Controllers\AnúncioController::class, 'editar'])->name('anuncio-editar');

