<?php

use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\PersonneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('personnes', PersonneController::class);
Route::apiResource('entreprises', EntreprisesController::class);
