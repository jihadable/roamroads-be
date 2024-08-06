<?php

use App\Http\Controllers\FavoriteController;
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

Route::prefix("/")->middleware("throttle:60,1");

Route::prefix("/users")->group(function(){
    Route::get("/", [UserController::class, "get_user_profile"])->middleware(JWTMiddleware::class);
    Route::post("/register", [UserController::class, "register"]);
    Route::post("/login", [UserController::class, "login"]);
    Route::patch("/", [UserController::class, "updateUserProfile"])->middleware(JWTMiddleware::class);
});

Route::prefix("/favorites")->middleware(JWTMiddleware::class)->group(function(){
    Route::get("/", [FavoriteController::class, "getAllFavorites"]);
    Route::post("/", [FavoriteController::class, "storeFavorites"]);
    Route::delete("/{flight_hotel_id}", [FavoriteController::class, "deleteFavorites"]);
});

Route::get("/flights", [FlightController::class, "index"]);

Route::get("/hotels", [HotelController::class, "index"]);