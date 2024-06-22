<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpedienteController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para CRUD de expedientes
Route::resource('expedientes', ExpedienteController::class);

// Ruta para editar un expediente
Route::get('/expedientes/{expediente}/edit', [ExpedienteController::class, 'edit'])->name('expedientes.edit');

// Ruta para eliminar un expediente

// Ruta para editar el estado de un expediente

