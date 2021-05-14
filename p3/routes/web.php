<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CrudController;

// Used for practice
use App\Http\Controllers\PracticeController;


// Included the two namespaces below in case I use them and forget to add them.
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;

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

// Home page
Route::get('/', [ItemController::class, 'index']);


// Checks to see if the site can connect to the database.
// DELETE once production is set.
Route::get('/debug', function () {
    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

Route::group(['middleware' => 'auth'], function () {

# CRUD operations

    // Lists available items
    Route::get('/items', [ItemController::class, 'items'])->middleware('auth');
   

    // Creates an item.
    Route::get('/items/add', [CrudController::class, 'add']);
    Route::post('/items', [CrudController::class, 'save']);

    // Displays users items
    Route::get('/items/profile', [CrudController::class, 'profile']);
 
    Route::post('/upload', [CrudController::class, 'photo']);

    Route::get('/items/{slug}', [ItemController::class, 'info']);

    // Updates an item.
    Route::get('/items/{slug}/edit', [CrudController::class, 'edit']);
    Route::put('/items/{slug}', [CrudController::class, 'update']);

    // Deletes and item.
    Route::get('/items/{slug}/delete', [CrudController::class, 'delete']);
    Route::delete('/items/{slug}', [CrudController::class, 'remove']);
});

// Routes to Curby's help page and contact info.
Route::get('/help', [ItemController::class, 'help']);
