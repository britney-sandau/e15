<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;

Route::get('/', [PageController::class, 'index']);


Route::get('/', [BookController::class, 'order']);

Route::get('/menu', [PageController::class, 'menu']);
Route::get('/pages/contact', [PageController::class, 'contact']);

//Route::get('/order', [PageController::class, 'order']);
//Route::post('/confirm ', [PageController::class, 'order']);
// Route::get('/order', [PageController::class, 'confirm']);
//Route::get('/books', [BookController::class, 'index']);
