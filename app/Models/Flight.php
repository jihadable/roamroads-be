<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class Flight extends EloquentModel {
    use HasFactory;

    protected $hidden = [
        "_id", "created_at", "updated_at"
    ];
}
