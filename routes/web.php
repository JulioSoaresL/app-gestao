<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login', function(){ return "Login"; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::middleware('autenticacao')
        ->get('/clientes', function(){ return "clientes"; })->name('app.clientes');

    Route::middleware('autenticacao')
        ->get('/fornecedores', [FornecedorController::class, 'index'])
        ->name('app.fornecedores');

    Route::middleware('autenticacao')
        ->get('/produtos', function(){ return "produtos"; })
        ->name('app.produtos');
});

Route::fallback(function(){
    return "A página solicitada está indisponível";
});