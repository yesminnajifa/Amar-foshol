<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/chat', [ChatController::class, 'chat']);

