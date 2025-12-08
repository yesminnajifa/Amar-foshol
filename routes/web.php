<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\BookingController;




Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/chat', [ChatController::class, 'chat'])->name('chat');

Route::get('/dashboard', [DashboardControler::class, 'dashboard'])->name('dashboard');

Route::get('/disease', [DiseaseController::class, 'disease'])->name('disease');

Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');

Route::get('/price', [PriceController::class, 'price'])->name('price');

Route::get('/product', [ProductController::class, 'product'])->name('product');

Route::get('/support', [SupportController::class, 'support'])->name('support');

Route::post('/booking/store', [BookingController::class, 'store'])->name('book.store');

Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

