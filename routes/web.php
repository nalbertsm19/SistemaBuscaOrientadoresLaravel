<?php

use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\DiscenteController;
use App\Http\Controllers\DocenteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projetos', [ProjetoController::class, 'index']);
Route::get('/discentes', [DiscenteController::class, 'index']);
Route::get('/docentes', [DocenteController::class, 'index']);

Auth::routes();

