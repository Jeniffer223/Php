<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar', [UserController::class, 'index'])->name('get.register');
Route::post('/cadastrar', [UserController::class, 'store'])->name('store.register');