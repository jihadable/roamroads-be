<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;
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

Route::prefix("/pengguna")->group(function(){
    Route::get("/", [UserController::class, "get_user_profile"])->middleware(JWTMiddleware::class);
    Route::post("/register", [UserController::class, "register"]);
    Route::post("/login", [UserController::class, "login"]);
});

Route::get("/flights", [FlightController::class, "index"]);

Route::get("/hotels", [HotelController::class, "index"]);