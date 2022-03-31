<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('login',[AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('logout', [AuthController::class, 'logout']);
});