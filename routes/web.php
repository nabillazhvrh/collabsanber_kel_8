<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('pages.welcome');
});

Route::get('/master', function () {
    return view('layouts.master');
});
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile/{id}', [HomeController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [HomeController::class, 'update'])->name('profile.update');
    Route::resource('category', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('customer', CustomerController::class);
});
