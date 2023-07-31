<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('login','index')->name('login');
    Route::post('login','store');
    Route::post('login','destroy')->name('logout');
});
