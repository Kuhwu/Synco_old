<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Syncoweb.registration');
});

//--Routing--//
Route::get('/login',[AuthController::class,'login']);
Route::get('/registration',[AuthController::class,'registration']);


//--UserAuthentication--//
Route::post('/register',[AuthController::class,'registerPost'])->name('register');
