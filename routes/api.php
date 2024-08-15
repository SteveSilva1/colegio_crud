<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(EstudianteController::class)
->prefix('estudiante')
->group(function () {
    Route::get('/all', 'showAll');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::post('/addCurso', 'storeCurso');
    Route::patch('/', 'patch');
    Route::delete('/{id}', 'delete');
});

Route::controller(MateriaController::class)
->prefix('materia')
->group(function () {
    Route::get('/all', 'showAll');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::patch('/', 'patch');
    Route::delete('/{id}', 'delete');
});

Route::controller(CursoController::class)
->prefix('curso')
->group(function () {
    Route::get('/all', 'showAll');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::patch('/', 'patch');
    Route::delete('/{id}', 'delete');
});

Route::controller(NotaController::class)
->prefix('nota')
->group(function () {
    Route::get('/all', 'showAll');
    Route::get('/curso/{id}', 'showByCurso');
    Route::get('/estudiante/{id}', 'showByEstudiante');
    Route::get('/CursoAndEstudiante', 'showByCursoAndEstudiante');
    Route::post('/', 'store');
    Route::patch('/', 'patch');
    Route::delete('/', 'delete');
});