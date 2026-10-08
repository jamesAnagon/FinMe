<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'] ) -> name('home');
Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard');

Route::post('/register' , [UserController::class , 'register'])
    ->name('register');
Route::post('/login' , [UserController::class , 'login'])
    ->name('login');
Route::get('/logout' , [UserController::class, 'logout'])
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/accounts', [AccountController::class, 'index'])
        ->name('accounts.index');

    Route::get('/accounts/create', [AccountController::class, 'create'])
        ->name('accounts.create');

    Route::post('/accounts', [AccountController::class, 'store'])
        ->name('accounts.store');
    Route::get('/accounts/{account}', [AccountController::class, 'show'])
        ->name('accounts.show');
});

Route::resource('categories', CategoryController::class);
Route::resource('transactions', TransactionController::class);
