<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\ProductControllerDB;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::post('/products', [ProductController::class, 'store']);

Route::put('/products/{id}', [ProductController::class, 'update']);

Route::delete('/products/{id}', [ProductController::class, 'destroy']);


Route::get('/dbproducts', [ProductControllerDB::class, 'index']);
Route::post('/dbproducts', [ProductControllerDB::class, 'store']);
Route::get('/dbproducts/{id}', [ProductControllerDB::class, 'show']);
Route::put('/dbproducts/{id}', [ProductControllerDB::class, 'update']);
Route::delete('/dbproducts/{id}', [ProductControllerDB::class, 'destroy']);
