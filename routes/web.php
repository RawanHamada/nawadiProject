<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Boy\BoyController;
use App\Http\Controllers\Boy\OptionBoyController;
use App\Http\Controllers\Girl\GirlController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BoyAdminController;


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
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

  // Start show Boy Routes
  Route::group([
    'prefix' => '/boy',
    'as' => 'boy.',
], function() {
    Route::get('/option', [OptionBoyController::class, 'create'])
    ->name('option');
Route::post('/', [OptionBoyController::class, 'store'])->name('store');
Route::post('/', [OptionBoyController::class, 'store'])->name('store');
Route::post('/success_register', [OptionBoyController::class, 'index'])->name('success');


    Route::get('/boy_information', [BoyController::class, 'index'])
    ->name('info');

});
// End boy Routes

// Boy Routes [ Namespace => app\Http\Controllers\Boy ]
Route::namespace('/Boy')
    ->middleware(['auth:web'])
    ->group(function() {

        // Start Boy Controller
        Route::get('/boy', [BoyController::class, 'index'])
        ->name('boy.home');


        // End Boy Controller




        // Girl Routes [ Namespace => app\Http\Controllers\Girl ]
        Route::namespace('/Girl')
        // ->middleware(['auth:web'])
        ->group(function() {


    Route::group([
        'prefix' => 'girl',
        'as' => 'girl.',
    ], function() {
        Route::get('/create', [GirlController::class, 'create'])->name('create');
        Route::post('/', [GirlController::class, 'store'])->name('store');



    });

});

    });
    // Admin Routes [ Namespace => app\Http\Controllers\Admin ]
// Route::group([
//     'prefix' => '/admin',
//     'namespace' => 'Admin',
//     'middleware' => ['auth:admin'],
// ], function(){

//     Route::prefix('/info')
//     ->as('info.')
//     ->group(function() {

//         Route::get('/', [AdminController::class, 'index'])
//         ->name('index');
//         // Route::get('/create', [Controller::class, 'create'])->name('create');
//         // Route::post('/', [Controller::class, 'store'])->name('store');



//     });

// });

    // Admin Routes [ Namespace => app\Http\Controllers\Admin ]
    Route::namespace('/Admin')
    ->middleware(['auth:admin'])
    ->group(function() {
        Route::get('/admin', [AdminController::class, 'index'])
            ->name('index');

        Route::group([
            'prefix' => '/admin/boy',
            'as' => 'admin.boy',
        ], function() {
            // Route::get('/', [AdminController::class, 'index'])
            // ->name('index');

            Route::get('/boy/details', [BoyAdminController::class, 'index'])
            ->name('details');
        });

         // End Workspace Routes

    });





