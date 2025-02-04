<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Log;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

/*
        try {
            JWTAuth::parseToken()->invalidate();
    
            return response()->json(['message' => 'Logged out'], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token invalid'], 401);
        }
*/
       /* 
        try {

            //auth()->logout();
            return response()->json(['message' => 'Logged out'], 200);
        } catch (JWTException $e) {
            return response()->json(['message' => 'Token not found'], 401);
        }
            */

        // Depuración: ver qué token recibe
        $token = $request->header('Authorization');
        Log::info("Token recibido: " . $token);
    
        try {
            JWTAuth::parseToken()->invalidate();
            //auth()->logout();
            return response()->json(['message' => 'Logged out'], 200);
        } catch (JWTException $e) {
            Log::error("Error invalidating token: " . $e->getMessage());
            return response()->json(['error' => 'Token invalid or not found'], 401);
        }


            
    }
    
}
