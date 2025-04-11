<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Redirecionando a rota principal para a listagem de produtos
Route::get('/', function () {
    return redirect()->route('produtos.index');
});

Route::resource('produtos', ProdutoController::class);
