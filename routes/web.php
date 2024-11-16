<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::get('/home', [HomeController::class, 'create'])->name('home');
Route::get('/detail', [DetailController::class, 'create'])->name('detail');
Route::get('/admin', [AdminController::class, 'create'])->name('admin');
Route::get('/tambahbeasiswa', [BeasiswaController::class, 'create'])->name('tambahbeasiswa');
Route::get('/editbeasiswa', [BeasiswaController::class, 'edit'])->name('editbeasiswa');