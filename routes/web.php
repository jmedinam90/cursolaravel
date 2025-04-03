<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/suma/{num1}/{num2}', [OperacionesController::class, 'suma']);
Route::get('/resta/{num1}/{num2}', [OperacionesController::class, 'resta']);
Route::get('/multiplicacion/{num1}/{num2}', [OperacionesController::class, 'multiplicacion']);
Route::get('/division/{num1}/{num2}', [OperacionesController::class, 'division']);


#Tarea 2
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');