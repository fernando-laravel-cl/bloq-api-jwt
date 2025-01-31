<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /*
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('authToken')->accessToken;

            return reSponse()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
        */
         // Obtenemos email/password
         $credentials = $request->only('email', 'password');

         try {
             // Intentamos autenticar con esos datos
             if (! $token = auth()->attempt($credentials)) {
                 return response()->json(['error' => 'Unauthorized'], 401);
             }
         } catch (JWTException $e) {
             // Si ocurre un problema al crear el token
             return response()->json(['error' => 'Could not create token'], 500);
         }
 
         // Si las credenciales son correctas, $token tendrá el JWT
         return response()->json([
             'message' => 'Login successful',
             'token'   => $token
         ], 200);
         
    }
}
