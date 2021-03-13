<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{title}', [BookController::class, 'show']);
Route::get('/search/{category}/{subcategory}', [BookController::class, 'search']);

// Route::get('/example', function () {
//     return view('abc');
//     // return 'abc';
// });

// Route::get('/book/{id}', function ($id) {
//     return 'You have requested book #'.$id;
// });


// Route::get('/books/{title?}', function ($title = null) {
//     if (is_null($title)) {
//         return "No title specified";
//     }
//     return "You are trying to view the book: " .$title;
// });

// Route::post('/process', function (){
//     return 'This is the example page...';
// });
