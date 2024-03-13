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
    return view('welcome');
})->name('home');

Route::get('/auth/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.action')->middleware('guest');

Route::group(['middleware' => ['api.auth'] ], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
   
    Route::prefix('products')->controller(App\Http\Controllers\ProductController::class)->group(function () {
        Route::get('/', 'index')->name('products');
        Route::get('/list', 'list')->name('products.list');

        Route::post('/store', 'store')->name('products.store');
        Route::put('/update/{id}', 'update')->name('products.update');
        Route::get('/show/{id}', 'show')->name('products.show');
        Route::delete('/delete/{id}', 'destroy')->name('products.delete');

    });

    Route::prefix('users')->controller(App\Http\Controllers\UserController::class)->group(function () {
        Route::get('/', 'index')->name('users');
        Route::get('/list', 'list')->name('users.list');

        Route::post('/store', 'store')->name('users.store');
        Route::put('/update/{id}', 'update')->name('users.update');
        Route::get('/show/{id}', 'show')->name('users.show');
        Route::delete('/delete/{id}', 'destroy')->name('users.delete');

    });
   
});