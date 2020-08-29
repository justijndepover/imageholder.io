<?php

use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('all', ImagesController::class)->name('all');

Route::get('{width}', ImageController::class)->name('image.square');
Route::get('{width}/{height}', ImageController::class)->name('image');
