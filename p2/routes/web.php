<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;

Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('/order', [OrderController::class, 'order']);
