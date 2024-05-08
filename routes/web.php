<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/index", [UserController::class, 'index']);
Route::get("/register", [UserController::class, 'register']);
Route::get('/product',[ProductController::class,'product']);
Route::get('/Reset',[UserController::class,'Reset']);
Route::get('/Reset',[UserController::class,'Reset']);
