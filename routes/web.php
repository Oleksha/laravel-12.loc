<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home

Route::get('/', [HomeController::class, 'index']);

// Registration

Route::get('registration', [AuthController::class, 'registration']);

// Login

Route::get('login', [AuthController::class, 'login']);

// Forgot

Route::get('forgot', [AuthController::class, 'forgot']);


