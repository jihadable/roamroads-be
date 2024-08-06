<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Utils\ErrorResponse;
use App\Utils\ResponseDefault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class FavoriteController extends Controller {
    public function getAllFavorites(){
        try {
            $user = JWTAuth::parseToken()->authenticate();

            $favorites = $user->favorites;
            
            return response()->json([
                ...ResponseDefault::create(200, true, "Berhasil mendapatkan semua simpanan"),
                "favorites" => $favorites->map(function($favorite){
                    return $favorite->response();
                })
            ]);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }

    public function storeFavorites(Request $request){
        $validator = Validator::make($request->all(), [
            "flight_hotel_id" => "required|string",
            "type" => "required|string",
        ]);
    
        if ($validator->fails()) {
            return response()->json(ResponseDefault::create(400, false, $validator->errors()->first()), 400);
        }
        
        try {
            $user = JWTAuth::parseToken()->authenticate();
            $user_id = $user->_id;

            $favorite = Favorite::create([
                "user_id" => $user_id, ...$request->all()
            ]);

            return response()->json([
                ...ResponseDefault::create(200, true, "Berhasil membuat simpanan baru"),
                "favorite" => $favorite->response()
            ], 200);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }

    public function deleteFavorites($fligh_hotel_id){
        try {
            $user = JWTAuth::parseToken()->authenticate();
            $user_id = $user->_id;

            $favorite = Favorite::where("user_id", $user_id)->where("flight_hotel_id", $fligh_hotel_id);

            if (!$favorite){
                return response()->json(ResponseDefault::create(404, false, "Data simpanan tidak ditemukan"));
            }

            $favorite->delete();

            return response()->json(ResponseDefault::create(200, true, "Berhasil menghapus simpanan"));
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }
}
