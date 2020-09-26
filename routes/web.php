<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\SubmissionController;

Auth::routes(['register' => false, 'verify' => false, 'confirm' => false]);
Route::get('/', HomeController::class)->name('home');
Route::get('all', ImagesController::class)->name('all');
Route::get('submit', [SubmitController::class, 'show'])->name('submit');
Route::post('submit', [SubmitController::class, 'store']);

Route::get('submissions', [SubmissionController::class, 'index'])->name('submissions')->middleware('auth');
Route::post('submissions', [SubmissionController::class, 'store'])->middleware('auth');

Route::get('{width}', ImageController::class)->name('image.square');
Route::get('{width}/{height}', ImageController::class)->name('image');

