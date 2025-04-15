<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Clientes\Edit;
use App\Livewire\Clientes\Show;
use App\Livewire\Clientes\Index;

use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\Produto\ProdutoShow;


use App\Livewire\Funcionarios\Index as FuncionarioIndex;
use App\Livewire\Funcionarios\Create as FuncionarioCreate;
use App\Livewire\Funcionarios\Edit as FuncionarioEdit;
use App\Livewire\Funcionarios\Show as FuncionarioShow;

use App\Livewire\Administrador\{Index as AdminIndex, Create as AdminCreate, Edit as AdminEdit, Show as AdminShow};


use Illuminate\Support\Facades\Route;


Route::prefix('clientes')->group(function(){
    Route::get('/', \App\Livewire\Clientes\Index::class)->name('clientes.index');
    Route::get('/create', \App\Livewire\Clientes\Create::class)->name('clientes.create');
    Route::get('/{cliente}', \App\Livewire\Clientes\Show::class)->name('clientes.show');
    Route::get('/{cliente}/edit', \App\Livewire\Clientes\Edit::class)->name('clientes.edit');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', ProdutoIndex::class)->name('produtos.index');
    Route::get('/create', ProdutoCreate::class)->name('produtos.create');
    Route::get('/{produto}', ProdutoShow::class)->name('produtos.show');
    Route::get('/{produto}/edit', ProdutoEdit::class)->name('produtos.edit');
});

Route::prefix('funcionarios')->group(function () {
    Route::get('/', FuncionarioIndex::class)->name('funcionarios.index');
    Route::get('/create', FuncionarioCreate::class)->name('funcionarios.create');
    Route::get('/{funcionario}/edit', FuncionarioEdit::class)->name('funcionarios.edit');
    Route::get('/{funcionario}', FuncionarioShow::class)->name('funcionarios.show');
});


Route::prefix('administrador')->group(function () {
    Route::get('/', AdminIndex::class)->name('administrador.index');
    Route::get('/create', AdminCreate::class)->name('administrador.create');
    Route::get('/{administrador}/edit', AdminEdit::class)->name('administrador.edit');
    Route::get('/{administrador}', AdminShow::class)->name('administrador.show');
});