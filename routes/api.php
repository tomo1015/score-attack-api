<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RankingController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});

Route::prefix('ranking')->group(function () {
    Route::post('', [RankingController::class, 'ranking']);
    Route::post('submit', [RankingController::class, 'submit']);
});
