<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as EloquentModel;

class Train extends EloquentModel {
    use HasFactory;

    protected $fillable = [
        "name"
    ];
}
