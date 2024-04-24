<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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
    $destinations = \App\Models\Destination::all();
    
    return view('home', compact('destinations'));
});

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function() {
    Route::get('/', [DestinationController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'destinasi', 'as' => 'destinasi.'], function () {
        Route::get('{destination}/edit', [DestinationController::class, 'edit'])->name('edit');
        Route::put('{destination}/edit', [DestinationController::class, 'update']);
        Route::delete('{destination}', [DestinationController::class, 'destroy'])->name('delete');
        Route::post('create', [DestinationController::class, 'store']);
        Route::get('create', [DestinationController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'kategori', 'as' => 'kategori.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('{category}/edit', [CategoryController::class, 'update']);
        Route::delete('{category}', [CategoryController::class, 'destroy'])->name('delete');
        Route::post('create', [CategoryController::class, 'store']);
        Route::get('create', [CategoryController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'account', 'as' => 'account.'], function() {
        Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
        Route::get('profile', [UserController::class, 'index'])->name('profile');
        Route::put('updateUsername', [UserController::class, 'updateUsername'])->name('rename');
        Route::put('resetPassword', [UserController::class, 'updatePassword'])->name('resetPassword');
    });
});

Route::get('destinasi/{destination}', [DestinationController::class, 'show']);

require_once __DIR__ . "/auth.php";
