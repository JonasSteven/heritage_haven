<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Room;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('user/home/index', [
            'rooms' => Room::all()
        ]);
    }

    public function room(){
        return view('user/room/index', [
            'rooms' => Room::all()
        ]);
    }

    public function roomDetail(Room $id){
        // dd($room);
        return view('user/room/detail', [
            'room' => $id
        ]);
    }

    public function gallery(){
        return view('user/gallery/index', [
            'galleries' => Gallery::all()
        ]);
    }

    public function about(){
        return view('user/about/index');
    }

    public function booking(){
        return view('user/booking/booking', [
            "title" => "Booking"
        ]);
    }

    public function bookingPayment(){
        return view('user/booking/bookingPayment', [
            "title" => "Booking Payment"
        ]);
    }

    public function recipe(){
        return view('user/recipe/index', [
            "title" => "recipe"
        ]);
    }

    public function availability(){
        return view('user/availability/index', [
            "title" => "availability"
        ]);
    }

}
