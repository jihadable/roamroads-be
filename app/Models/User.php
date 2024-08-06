<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use MongoDB\Laravel\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject {
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "password",
        "phone"
    ];

    protected $hidden = [
        "_id", 'password', "created_at", "updated_at"
    ];

    public function favoriteHotels(): BelongsToMany {
        return $this->belongsToMany(Hotel::class, "favorite", "user_id", "flight_hotel_id");
    }

    public function favoriteFlights(): BelongsToMany {
        return $this->belongsToMany(Flight::class, "favorite", "user_id", "flight_hotel_id");
    }

    public function favorites(){
        return $this->hasMany(Favorite::class, "user_id", "_id");
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(){
        return [];
    }
}
