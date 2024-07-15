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

Route::get("/users", [UserController::class, "get_user_profile"]);
Route::post("users/register", [UserController::class, "register"]);
Route::post("users/login", [UserController::class, "login"]);

Route::get("/flights", [FlightController::class, "index"]);

Route::get("/hotels", [HotelController::class, "index"]);