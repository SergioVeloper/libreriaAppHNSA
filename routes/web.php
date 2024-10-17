<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('libros', LibroController::class);
Route::resource('editoriales', EditorialController::class);
