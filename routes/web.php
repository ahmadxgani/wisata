<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DestinationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('destinasi/salabintana', function() {
    return view('destinasi.detail');
})->name('detail');

Route::group(['middleware' => 'auth', 'prefix' => '/'], function() {
    Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('dashboard', function() {
        return view('user.dashboard');
    })->name('dashboard');
    Route::post('destinasi/new', [DestinationController::class, 'store']);
    Route::group(['prefix' => 'account', 'as' => 'account.'], function() {
        Route::get('profile', function() {
            return view('user.profile');
        })->name('profile');
    });
    Route::get('destinasi/new', [DestinationController::class, 'create'])->name('new_destination');
});

require_once __DIR__ . "/auth.php";
