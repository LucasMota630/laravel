<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', function(){
    return [
        ['nome' => 'NALDODOCANAL', 'email' => 'naldodocanal@hotmail.com'],
        ['nome' => 'ZÉ BISCOITO', 'email' => 'ze.biscoito@pipoca.com'],
        ['nome' => 'MARIA GASOSA', 'email' => 'maria.gasosa@refri.com'],
        ['nome' => 'JULINHO DA VÁLVULA', 'email' => 'julinhodavalvula@pressao.net'],
        ['nome' => 'TIÃO PIPOCA', 'email' => 'tiao.pipoca@cinema.org'],
        ['nome' => 'BETO CATRACA', 'email' => 'beto.catraca@busmail.com'],
        ['nome' => 'DONANA DA FEIRA', 'email' => 'donana.feira@horta.com'],
        ['nome' => 'CHICO PIRULITO', 'email' => 'chico.pirulito@doces.net'],
        ['nome' => 'LURDINHA DO TAXI', 'email' => 'lurdinha.taxi@corrida.com'],
        ['nome' => 'RONALDO PÃO COM OVO', 'email' => 'ronaldo.paoovo@cafedamanha.org']
    ];
});

