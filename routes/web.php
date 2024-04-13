<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::group(['middleware' => 'auth', 'prefix' => '/'], function() {
    Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'account', 'as' => 'account.'], function() {
        Route::get('profile', function() {
            return view('profile');
        })->name('profile');
    });
});

require_once __DIR__ . "/auth.php";
