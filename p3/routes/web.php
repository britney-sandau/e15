<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', function () {
    return view('welcome');
});

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


Route::get('/items', [ItemController::class, 'index']);

Route::get('/items/{title}', [ItemController::class, 'product']);


Route::get('/example', function () {
    return 'Example...';
});

Route::get('/map', function () {
    return 'City map...';
});



// Used to practice various lecture codes.


Route::any('/practice/{n?}', [PracticeController::class, 'index']);

Route::get('/practice', function () {
    dump(config('mail.driver'));
});
