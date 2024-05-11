<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [UserController::class, 'showindexForm'])->name('index');
Route::get("/index", [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post("/register", [UserController::class, 'register'])->name('register');
Route::get('/product',[ProductController::class,'product']);
Route::get('/Reset',[UserController::class,'Reset']);
Route::get('/Reset',[UserController::class,'Reset']);
Route::get('/dashboard',[UserController::class,'dashboard']);
Route::get('/user',[UserController::class,'user']);
