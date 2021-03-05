<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return '<h1>Bookmark</h1>';
    return view('welcome');
});

Route::get('/example', function () {
    return view('abc');
    // return 'abc';
});

Route::get('/book/{id}', function ($id) {
    return 'You have requested book #'.$id;
});
