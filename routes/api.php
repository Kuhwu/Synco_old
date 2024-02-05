<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register',[UserController::class,'register']);
Route::post('/auth/login', [UserController::class,'login']);
Route::get('/auth/user',[UserController::class,'user'])->middleware('auth:sanctum');
Route::get('/auth/logout',[UserController::class,'logout'])->middleware('auth:sanctum');
Route::post('/profile/change-password',[ProfileController::class,'change_password']);



