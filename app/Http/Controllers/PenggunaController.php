<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller {
    public function index(Request $request){
        Pengguna::create([
            "name" => $request->name
        ]);

        return response()->json("OK", 200);
    }
}
