<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

Route::get('/', function () {
    return view('welcome');
});

// // Login routes
// Route::view('/login', 'auth.login')
//     ->middleware('guest')
//     ->name('login');

// Route::post('/login', Login::class)
//     ->middleware('guest');

// Logout route
// Route::post('/logout', Logout::class)
//     ->middleware('auth')
//     ->name('logout');

// Display the login form
// Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');

// // Handle form submission logic
// Route::post('/login', [AuthController::class, 'login'])->name('login.attempt')->middleware('guest');

use App\Http\Controllers\Auth\LoginRegisterController;

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

Route::resource('test', TestController::class);
Route::resource('product', ProductController::class);
Route::get('product_test/view', [ProductController::class, 'view'])->name('product_test.view');
Route::get('product_test_search', [ProductController::class, 'search'])->name('product_test.search');