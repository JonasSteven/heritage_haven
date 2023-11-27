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

Route::get('/', function(){
    return view('user/home/index');
});

Route::get('/gallery', function(){
    return view('user/gallery/index');
});

Route::get('/about', function(){
    return view('user/about/index');
});

Route::get('/booking', function () {
    return view('user/booking/booking', [
        "title" => "Booking"
    ]);
});

Route::get('/bookingPayment', function(){
    return view('user/booking/bookingPayment', [
        "title" => "Booking Payment"
    ]);
});