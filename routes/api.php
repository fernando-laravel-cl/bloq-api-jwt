<?php

use App\Http\Controllers\API\LoginController;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function () {
    // si tu controlador es invocable, desde Laravel 8+ puedes poner directamente
    //Route::post('login', [LoginController::class, '__invoke']);
    Route::post('login', LoginController::class);
});