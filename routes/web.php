<?php

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

Route::get('/booking', function () {
    return view('booking', [
        "title" => "Booking"
    ]);
});

Route::get('/bookingPayment', function(){
    return view('bookingPayment', [
        "title" => "Booking Payment"
    ]);
});