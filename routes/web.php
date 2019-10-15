<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/administrador/tipousuario', 'Administrador\TipoUsuarioController@index')->name('administrador-tipo-usuario');
});