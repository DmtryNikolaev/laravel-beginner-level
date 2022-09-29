<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/get', 'GetController');
});