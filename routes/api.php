<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CorsMiddleware;
use App\Http\Middleware\JWTMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix("/users")->group(function(){
    Route::get("/", [UserController::class, "get_user_profile"])->middleware(JWTMiddleware::class, CorsMiddleware::class);
    Route::post("/register", [UserController::class, "register"])->middleware(CorsMiddleware::class);
    Route::post("/login", [UserController::class, "login"])->middleware(CorsMiddleware::class);
});

Route::get("/flights", [FlightController::class, "index"])->middleware(CorsMiddleware::class);

Route::get("/hotels", [HotelController::class, "index"])->middleware(CorsMiddleware::class);