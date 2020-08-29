<?php

use Illuminate\Support\Facades\Route;

Route::get('{width}', ImageController::class)->name('image.square');
Route::get('{width}/{height}', ImageController::class)->name('image');

Route::get('/', HomeController::class)->name('home');
