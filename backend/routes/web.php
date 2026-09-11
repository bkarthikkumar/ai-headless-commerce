<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HealthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello from Laravel',
    ]);
});

Route::get('/health', [HealthController::class, 'index']);

Route::get('/cf', [HealthController::class, 'customerFunction']);

Route::get('/af/{id}', [HealthController::class, 'anotherFunction']);
