<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class Favorite extends EloquentModel {
    use HasFactory;

    protected $fillable = [
        "user_id",
        "flight_hotel_id",
        "type"
    ];

    protected $hidden = [
        "_id", "created_at", "updated_at"
    ];

    public function user(){
        return $this->belongsTo(User::class, "user_id", "_id");
    }

    public function flight(){
        return $this->belongsTo(Flight::class, "flight_hotel_id", "_id");
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class, "flight_hotel_id", "_id");
    }

    public function response(){
        $response = [
            "id" => $this->_id,
            "user" => $this->user,
            "type" => $this->type,
        ];
    
        if ($this->type === "flight") {
            $response["favorite"] = ["id" => $this->flight->_id, ...$this->flight->toArray()];
        }
        else if ($this->type === "hotel") {
            $response["favorite"] = ["id" => $this->hotel->_id, ...$this->hotel->toArray()];
        }
    
        return $response;
    }
}
