<?php

use Illuminate\Support\Facades\Route;

Route::get('{width}', ImageController::class);
Route::get('{width}/{height}', ImageController::class);
