<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::redirect('/', '/home');


Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
