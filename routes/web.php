<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/index-users', [UserController::class, 'index'])->name('users.index');

Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');

Route::post('/edit-user', [UserController::class, 'edit'])->name('user.edit');
Route::post('/update-user', [UserController::class, 'update'])->name('user.update');