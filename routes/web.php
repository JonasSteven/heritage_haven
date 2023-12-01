<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [UserController::class, 'index']);

        Route::resource('/room', RoomController::class);
        Route::resource('/gallery', GalleryController::class);
        Route::resource('/payment', PaymentController::class);
        Route::resource('/booking', BookingController::class);

        Route::post('/logout', [LoginController::class, 'logout']);
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });
});

Route::get('/', [FrontController::class, 'home']);

Route::get('/room', [FrontController::class, 'room']);
Route::get('/room/{id}', [FrontController::class, 'roomDetail'])->name('detail');

Route::get('/gallery', [FrontController::class, 'gallery']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/booking/{id}', [FrontController::class, 'booking']);
// Route::get('/booking/{id}', [FrontController::class])

Route::get('/bookingPayment', [FrontController::class, 'bookingPayment']);
Route::post('/bookingPayment', [FrontController::class, 'proccessPayment']);

Route::get('/receipt', [FrontController::class, 'receipt']);

Route::get('/availability', [FrontController::class, 'availability']);