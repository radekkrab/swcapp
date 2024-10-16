<?php

use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/store_images', [ImageController::class, 'store']);

Route::get('/images', [ImageController::class, 'index']);

Route::get('/images/{id}', [ImageController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
