<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiSunController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [ApiAuthController::class, 'register']);
Route::post('login', [ApiAuthController::class, 'login']);
Route::get('logout', [ApiAuthController::class, 'logout']);
Route::get('sincos', [ApiSunController::class, 'sincos']);