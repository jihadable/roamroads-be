<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller {
    public function index(Request $request){
        Train::create([
            "name" => $request->name
        ]);

        return response()->json("OK", 200);
    }
}
