<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Utils\ErrorResponse;
use App\Utils\ResponseDefault;

class FlightController extends Controller {
    public function index(){
        try {
            $flights = Flight::all();
    
            return response()->json([
                ...ResponseDefault::create(200, true, "Berhasil mendapatkan semua data penerbangan"),
                "flights" => $flights->map(function($flight){
                    return array_merge(["id" => $flight->_id], $flight->toArray());
                })
            ], 200);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }
}
