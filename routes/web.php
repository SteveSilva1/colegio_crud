<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Estudiante;
use App\Models\Materia;


Route::get('/', function () {
    return view('welcome');
});
