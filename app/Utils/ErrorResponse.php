<?php 

namespace App\Utils;

class ErrorResponse {
    public static function create($error){
        return [
            "status" => 400,
            "ok" => false,
            "message" => $error->getMessage()
        ];
    }
}