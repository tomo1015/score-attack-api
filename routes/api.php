<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RankingController;
use App\Http\Controllers\Api\ScoreController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});

Route::prefix('ranking')->group(function () {
    Route::post('', [RankingController::class, 'ranking']);
});

Route::prefix('score')->group(function () {
    Route::post('submit', [ScoreController::class, 'submit']);
    Route::post('get',[ScoreController::class, 'get']);
});
