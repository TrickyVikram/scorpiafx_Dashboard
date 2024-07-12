<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboard\ProfileController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('api/profile', [ProfileController::class, 'store']);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('profile', ProfileController::class);
});