<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index')->middleware(LogAcessoMiddleware::class);
Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::middleware(LogAcessoMiddleware::class)->get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', function(){ return "Login"; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return "clientes"; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return "produtos"; })->name('app.produtos');
});

Route::fallback(function(){
    return "A página solicitada está indisponível";
});