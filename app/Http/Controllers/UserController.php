<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utils\ErrorResponse;
use App\Utils\ResponseDefault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller {
    public function get_user_profile(){
        try {
            $user = JWTAuth::parseToken()->authenticate();
    
            return response()->json([
                ...ResponseDefault::create(200, true, "Berhasil mendapatkan data pengguna"),
                "user" => $user
            ], 200);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "phone" => "required|string|regex:/^08\d{8,13}$/",
            "password" => "required|string|min:8",
        ]);
    
        if ($validator->fails()){ 
            return response()->json(ResponseDefault::create(400, false, $validator->errors()->first()), 400);
        }

        try {
            $user = User::where("email", $request->email)->first();
            
            if ($user){
                return response()->json(
                    ResponseDefault::create(400, false, "Email yang dimasukkan sudah terdaftar"), 400
                );
            }
    
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => Hash::make($request->password)
            ]);
    
            $token = JWTAuth::fromUser($user);
    
            return response()->json([
                ...ResponseDefault::create(202, true, "Pengguna berhasil registrasi"),
                "token" => $token,
                "user" => $user
            ], 202);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            "email" => "required|string|email",
            "password" => "required|string|min:8",
        ]);
    
        if ($validator->fails()) {
            return response()->json(ResponseDefault::create(400, false, $validator->errors()->first()), 400);
        }

        try {
            $user = User::where("email", $request->email)->first();
    
            if (!$user || !Hash::check($request->password, $user->password)){
                return response()->json(ResponseDefault::create(400, false, "Email atau password salah"), 400);
            }
    
            $token = JWTAuth::fromUser($user);
            
            return response()->json([
                ...ResponseDefault::create(200, true, "Pengguna berhasil login"),
                "token" => $token,
                "user" => $user
            ], 200);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }

    public function updateUserProfile(Request $request){
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "phone" => "required|string|regex:/^08\d{8,13}$/",
        ]);
    
        if ($validator->fails()) {
            return response()->json(ResponseDefault::create(400, false, $validator->errors()->first()), 400);
        }

        try {
            $user = JWTAuth::parseToken()->authenticate();   
    
            $user->update([...$request->all()]);
    
            return response()->json(ResponseDefault::create(200, true, "Berhasil memperbarui data pengguna"), 200);
        } catch (\Throwable $error) {
            return response()->json(ErrorResponse::create($error), 400);
        }
    }
}
