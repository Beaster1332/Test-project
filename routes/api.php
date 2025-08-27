<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix("v1")->middleware(["throttle:api"])->group(function () {
    Route::post("register", [AuthController::class, "register"]);
    Route::post("login", [AuthController::class, "login"]);
});

Route::prefix("v1")->middleware(["throttle:api", "auth:sanctum"])->group(
    function () {
        Route::apiResource("todos", TodoController::class);
        Route::get("logout", [AuthController::class, "logout"]);
    }
);
