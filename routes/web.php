<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengguna\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing-page', [LandingPageController::class, 'index']);
