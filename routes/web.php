<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPage\LandingPageController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Tiket\TiketController;

Route::get('/', [LandingPageController::class, 'beranda']);

Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard'); 

Route::get('/tdisetujui', [TiketController::class, 'index'])->name('tiket');
