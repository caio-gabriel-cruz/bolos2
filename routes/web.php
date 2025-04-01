<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/sobre', [\App\Http\Controllers\SobreNosController::class, 'sobre']);

Route::prefix('/api')->group(function() {
    Route::get('/produtos', function() {
        return 'produtos';
    });
    
    Route::get('/fornecedores', function() {
        return 'fornecedores';
    });
    
    Route::get('/clientes', function() {
        return 'clientes';
    });
    
});

Route::get('/login', function() {
    return 'Login';
});


Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="/">Clique aqui</a> para ir para a página inicial.';
});