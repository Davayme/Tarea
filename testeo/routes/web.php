<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('buscar');
});

Route::get('/buscar', [EstudianteController::class, 'show'])->name('buscar');
Route::get('/agregar', function (){

    return view('add');
});
Route::post('/agregar', [EstudianteController::class, 'create'])->name('guardar');

Route::get('/estudiantes', [EstudianteController::class, 'index']);
Route::get('/estudiantes/{cedula}', [EstudianteController::class, 'show1'])->name('estudiantes.show');