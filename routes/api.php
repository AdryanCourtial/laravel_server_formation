<?php

use App\Http\Controllers\CivilitesController;
use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\LocalisationsController;
use App\Http\Controllers\PersonneController;
use App\Models\Localisations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('personnes', PersonneController::class);
Route::apiResource('entreprises', EntreprisesController::class);
Route::apiResource('localisations', LocalisationsController::class);
Route::apiResource('civilites', CivilitesController::class);

