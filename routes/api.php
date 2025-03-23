<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']); // ✅ Allow access without auth
Route::post('/login', [AuthController::class, 'login']);       // ✅ Allow access without auth

Route::middleware("auth:sanctum")->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
