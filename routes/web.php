<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Livewire\App;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/api')->group(function () {
    Route::get('/', [CalculatorController::class, 'calcWithEachValue'])->name('');
    Route::get('/', [CalculatorController::class, 'calcWithMediaAndStdDeviation'])->name('');
    Route::get('/', [CalculatorController::class, 'calcWithConfidence'])->name('');
    Route::get('/', [CalculatorController::class, 'calculateWithP'])->name('');
});

Route::prefix('/app')->group(function () {
    Route::get('/main', App::class)->name('view.app');
});

Route::get('/dani', function () {
    return [
        'success' => true,
        'message' => 'I love u',
        'data' => 'Our Day 12/06/2023'
    ];
});
