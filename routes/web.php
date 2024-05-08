<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfidenceIntervalController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/v1')->group(function () {
    Route::get('/calculate', [ConfidenceIntervalController::class, 'calculate'])->name('v1.calculate');
});