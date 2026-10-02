<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/test', function (Request $request) {
    return response()->json([
        'message' => 'API testing berhasil!',
        'status' => 'success'
    ]);
});
    Route::post('/logout', [AuthController::class, 'logout']);
});
