<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::post('/peoples_applications', [ApplicationController::class, 'store']);
    Route::get('/sorted', [ApplicationController::class, 'sorted']); 
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');