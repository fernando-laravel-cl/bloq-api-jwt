<?php

use App\Http\Controllers\API\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LogoutController;
use App\Http\Controllers\API\ProductController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function () {
    // si tu controlador es invocable, desde Laravel 8+ puedes poner directamente
    //Route::post('login', [LoginController::class, '__invoke']);
    Route::post('login', LoginController::class);

    //Route::post('logout', LogoutController::class);  
  //  Route::get('/products', [ProductController::class, 'index']);
    
});

Route::middleware('auth:api')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('logout', LogoutController::class);  
});
