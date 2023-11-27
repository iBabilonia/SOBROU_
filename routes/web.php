<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/addproduto', function () {
    return view('./app/adicionar-produto');
});

Route::get('/alterarperfilvend', function () {
    return view('./app/alterar-perfil-vend');
});

Route::get('/alterarperfil', function () {
    return view('./app/alterar-perfil');
});

Route::get('/carrinho', function () {
    return view('./app/carrinho');
});

Route::get('/contato', function () {
    return view('./app/contato');
});

Route::get('/contatovend', function () {
    return view('./app/contato-vend');
});

Route::get('/crieaconta', function () {
    return view('./app/crieaconta');
});

Route::get('/escolha', function () {
    return view('./app/escolha');
});

Route::get('/historicopedidos', function () {
    return view('./app/historico_pedidos');
});

Route::get('/indexbase', function () {
    return view('./app/index-base');
});

Route::get('/indexvend', function () {
    return view('./app/index-vend');
});

//Route::get('/', function () {
//    return view('./app/index-base');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('./app/index');
});


Route::get('/logn', function () {
    return view('./app/login');
});

Route::get('/lognvend', function () {
    return view('./app/login-vend');
});

Route::get('/meusprodutos', function () {
    return view('./app/meus-produtos');
});

Route::get('/notificacoesvend', function () {
    return view('./app/notificacoes-vend');
});

Route::get('/notificacoes', function () {
    return view('./app/notificacoes');
});

Route::get('/recuperarsenha', function () {
    return view('./app/recuperar-senha');
});

Route::get('/recuperarsenhavend', function () {
    return view('./app/recuperar-senha-vend');
});

Route::get('/usuariovend', function () {
    return view('./app/usuario-vend');
});

Route::get('/usuario', function () {
    return view('./app/usuario');
});

Route::get('/burger', function () {
    return view('./app/burger');
});

Route::get('/pizza', function () {
    return view('./app/pizza');
});

Route::get('/vinhos', function () {
    return view('./app/vinhos');
});

Route::get('/sobremesas', function () {
    return view('./app/sobremesas');
});

Route::get('/cafe', function () {
    return view('./app/cafe');
});

Route::get('/comidajaponesa', function () {
    return view('./app/comidajaponesa');
});

Route::get('/vegano', function () {
    return view('./app/vegano');
});

Route::get('/pratofeito', function () {
    return view('./app/pratofeito');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



});

require __DIR__.'/auth.php';
