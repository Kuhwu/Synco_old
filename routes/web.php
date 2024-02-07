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
    return view('Syncoweb.login');
});

//--Routing--//
Route::get('/login',[AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::get('/homepage',[AuthController::class,'homepage'])->middleware('isLoggedIn');
Route::get('/profile',[AuthController::class,'profile'])->middleware('isLoggedIn');
Route::get('/logout',[AuthController::class,'logout']);


//--UserAuthentication--//
Route::post('/register',[AuthController::class,'registerPost'])->name('register');
Route::post('/loginUser',[AuthController::class,'loginUser'])->name('loginUser');

