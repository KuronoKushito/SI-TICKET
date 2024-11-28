<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPage\LandingPageController;

Route::get('/', [LandingPageController::class, 'beranda']);