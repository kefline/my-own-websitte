<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/indexForm', [UserController::class, 'indexForm']);
Route::post("/index", [UserController::class, 'index'])->name('index');
Route::get('/register1', [UserController::class, 'showRegistrationForm']);
Route::post("/register", [UserController::class, 'register'])->name('register');
Route::get('/product',[ProductController::class,'product']);
Route::get('/Reset',[UserController::class,'Reset']);

Route::get('/dashboard',[UserController::class,'dashboard']);
Route::get('/user',[UserController::class,'user']);
