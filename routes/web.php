<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/personas', function () {
    return view('personas');
});

Route::get('/firmas', function () {
    return view('firmas');
});


Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/contratos', function () {
    return view('contratos');
});


Route::get('/empresas', function () {
    return view('empresas');
});


Route::get('/registro', function () {
    return view('registro');
});

Route::get('/clausulas', function () {
    return view('clausulas');
});




