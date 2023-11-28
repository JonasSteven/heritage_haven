<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'home']);

Route::get('/room', [FrontController::class, 'room']);
Route::get('/room/{id}', [FrontController::class, 'roomDetail'])->name('detail');

Route::get('/gallery', [FrontController::class, 'gallery']);

Route::get('/about', [FrontController::class, 'about']);

Route::get('/booking', [FrontController::class, 'booking']);

Route::get('/bookingPayment', [FrontController::class, 'bookingPayment']);