<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
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

Route::get('/home', function () {
    return view('admin.home.index');
});
Route::resource('/rooms', RoomController::class);
Route::resource('/galleries', GalleryController::class);
Route::resource('/payments', PaymentController::class);
Route::resource('/bookings', BookingController::class);

Route::get('/', [FrontController::class, 'home']);

Route::get('/room', [FrontController::class, 'room']);
Route::get('/room/{id}', [FrontController::class, 'roomDetail'])->name('detail');

Route::get('/gallery', [FrontController::class, 'gallery']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/booking/{id}', [FrontController::class, 'booking']);
// Route::get('/booking/{id}', [FrontController::class])

Route::get('/bookingPayment', [FrontController::class, 'bookingPayment']);

Route::get('/receipt', [FrontController::class, 'receipt']);

Route::get('/availability', [FrontController::class, 'availability']);