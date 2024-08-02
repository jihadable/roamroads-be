<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Utils\ErrorResponse;
use App\Utils\ResponseDefault;

class HotelController extends Controller {
    public function index(){
        try {
            $hotels = Hotel::all();
    
            return response()->json([
                ...ResponseDefault::create(200, true, "Berhasil mendapatkan semua data hotel"),
                "hotels" => $hotels->map(function($hotel){
                    return array_merge(["id" => $hotel->_id], $hotel->toArray());
                })
            ], 200);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }
}