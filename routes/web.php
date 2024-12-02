<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPage\LandingPageController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Tiket\TiketController;

Route::get('/', [LandingPageController::class, 'beranda']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/setujui', [TiketController::class, 'index'])->name('tiket_setuju');

Route::get('/proses', [TiketController::class, 'proses'])->name('tiket_proses');

Route::get('/tolak', [TiketController::class, 'tolak'])->name('tiket_tolak');

Route::get('/selesai', [TiketController::class, 'selesai'])->name('tiket_selesai');