<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('create');
Route::post('login', [LoginController::class, 'destroy'])->name('logout');

Route::get('dashboard', function (){
    return view('dashboard');
})->middleware('auth')->name('dashboard');
