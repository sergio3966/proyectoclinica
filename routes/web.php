<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['nombre'=>'sergio vaquerano']);
});
Route::get('/citas/show', function(){
    return view('citas/show', ['citas'=>'2024-09-30 14:30:00']);
});
Route::get('/citas/create', function(){
    return view('citas/create');
});
Route::get('/citas/update', function(){
    return view('citas/update');
});
Route::get('/medicos/show', function(){
    return view('medicos/show', ['medicos'=>'alfredo escamilla']);
});
Route::get('/medicos/create', function(){
    return view('medicos/create');
});
Route::get('/medicos/update', function(){
    return view('medicos/update');
});
Route::get('/pacientes/show', function(){
    return view('pacientes/show', ['pacientes'=>'Anival']);
});
Route::get('/pacientes/create', function(){
    return view('pacientes/create');
});
Route::get('/pacientes/update', function(){
    return view('pacientes/update');
});
Route::get('/usuarios/show', function(){
    return view('usuarios/show', ['usuarios'=>'sergio']);
});
Route::get('/usuarios/create', function(){
    return view('usuarios/create');
});
Route::get('/usuarios/update', function(){
    return view('usuarios/update');
});

Route::get('/recordatorios/show', function(){
    return view('recordatorios/show', ['recordatorios'=>'2024-09-30 14:30:00']);
});
Route::get('/recordatorios/create', function(){
    return view('recordatorios/create');
});
Route::get('/recordatorios/update', function(){
    return view('recordatorios/update');
});

Route::get('/reportes/show', function(){
    return view('reportes/show', ['reportes'=>'2023/02/10']);
});
Route::get('/reportes/create', function(){
    return view('reportes/create');
});
Route::get('/reportes/update', function(){
    return view('reportes/update');
});