<?php

use App\Livewire\Auth\Login;
use App\Livewire\Categoria\CategoriaCreate;
use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\Fornecedor\FornecedorCreate;
use App\Livewire\Fornecedor\FornecedorIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)
    ->name('login');

Route::get('/produtos/create', ProdutoCreate::class)
    ->name('produtos.create');

Route::get('/produtos', ProdutoIndex::class)
    ->name('produtos.index');

Route::get('/fornecedores/create', FornecedorCreate::class)
    ->name('fornecedores.create');

Route::get('/fornecedores/create', FornecedorCreate::class)
    ->name('fornecedores.create');

Route::get('/fornecedores', FornecedorIndex::class)
    ->name('fornecedores.index');

Route::get('/categorias/create', CategoriaCreate::class)
    ->name('categorias.create');

Route::get('/categorias', CategoriaIndex::class)
    ->name('categorias.index');




