<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPage\LandingPageController;
use App\Http\Controllers\Login\LoginController;

Route::get('/', [LandingPageController::class, 'beranda']);

Route::get('/log', [LoginController::class, 'index'])->name('login');