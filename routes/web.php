<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/suma/{num1}/{num2}', [OperacionesController::class, 'suma']);
Route::get('/resta/{num1}/{num2}', [OperacionesController::class, 'resta']);
Route::get('/multiplicacion/{num1}/{num2}', [OperacionesController::class, 'multiplicacion']);
Route::get('/division/{num1}/{num2}', [OperacionesController::class, 'division']);

