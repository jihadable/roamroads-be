<?php

namespace App\Http\Middleware;

use App\Utils\ResponseDefault;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        try {
			$user = JWTAuth::parseToken()->authenticate();

            if (!$user){
                return response()->json(ResponseDefault::create(400, false, "Token invalid"), 400);
            }
		} catch (Exception $e) {
            return response()->json(["message" => "Token invalid"], 400);
		}

		return $next($request);
    }
}
