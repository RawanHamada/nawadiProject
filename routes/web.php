<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Boy\BoyController;
use App\Http\Controllers\Boy\OptionBoyController;


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

// Boy Routes [ Namespace => app\Http\Controllers\Boy ]
Route::namespace('/Boy')
    // ->middleware(['auth'])
    ->group(function() {

        // Start Boy Controller

        Route::get('boy/option/', [OptionBoyController::class, 'create'])
            ->name('option');
        Route::post('/', [OptionBoyController::class, 'store'])->name('store');

        // End Boy Controller

        // Start show Boy Routes
        Route::group([
            'prefix' => '/boy',
            'as' => 'boy.',
        ], function() {

            // Route::post('/{city}', function () {
            //     return view('');
            // })->name('op');

            Route::get('/second_register', [BoyController::class, 'create'])
            ->name('sec_register');

            Route::get('/boy_information', [BoyController::class, 'index'])
            ->name('info');

        });
        // End boy Routes

    });


