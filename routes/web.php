<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('index');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/auth', [LoginController::class, 'store'])->name('auth');
Route::post('login', [LoginController::class, 'destroy'])->name('logout');

Route::get('dashboard', function (){
    return view('dashboard');
})->middleware('auth')->name('dashboard');
