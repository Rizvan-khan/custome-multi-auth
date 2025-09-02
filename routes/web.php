<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    //  Route::get('register', [App\Http\Controllers\Auth\AdminAuthController::class, 'showRegisterForm'])->name('admin.auth.register');
    Route::get('login', [App\Http\Controllers\Auth\AdminAuthController::class, 'showLoginForm'])->name('admin.auth.login');
    Route::post('login', [App\Http\Controllers\Auth\AdminAuthController::class, 'login']);
        // Route::post('register', [App\Http\Controllers\Auth\AdminAuthController::class, 'register']);
    Route::post('logout', [App\Http\Controllers\Auth\AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth:admin')->name('admin.dashboard');
});

// User routes
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth:web')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::resource('posts', App\Http\Controllers\PostController::class);
    
});
Route::get('/welcome', [App\Http\Controllers\PostController::class, 'index'])
    ->middleware('auth:web')
    ->name('welcome');


Route::get('register', [App\Http\Controllers\Auth\UserAuthController::class, 'showRegisterForm'])->name('auth.register');
Route::post('register', [App\Http\Controllers\Auth\UserAuthController::class, 'register']);

Route::get('/login', [App\Http\Controllers\Auth\UserAuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('login', [App\Http\Controllers\Auth\UserAuthController::class, 'login']);

Route::post('logout', [App\Http\Controllers\Auth\UserAuthController::class, 'logout'])->name('logout');
