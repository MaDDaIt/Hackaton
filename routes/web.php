<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificaciONController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\RecepcionController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('verificacion', VerificaciONController::class)->names('verificacion');



Route::get('/documentos', [DocumentosController::class, 'index'])->name('documentos');
Route::get('/recepcion', [RecepcionController::class, 'index'])->name('recepcion');
Route::get('/evaluacion', [EvaluacionController::class, 'index'])->name('evaluacion');

Route::get('/recepcion', [RecepcionController::class, 'index'])->name('recepcion');
