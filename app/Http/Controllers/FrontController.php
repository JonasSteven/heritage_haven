<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Room;
use Illuminate\Http\Request;
use Validator;

class FrontController extends Controller
{
    public function home(){
        return view('user.home.index', [
            'rooms' => Room::all()
        ]);
    }

    public function room(){
        return view('user.room.index', [
            'rooms' => Room::all()
        ]);
    }

    public function roomDetail(Room $id){
        // dd($room);
        return view('user.room.detail', [
            'room' => $id
        ]);
    }

    public function gallery(){
        return view('user.gallery.index', [
            'galleries' => Gallery::all()
        ]);
    }

    public function about(){
        return view('user.about.index');
    }

    public function booking(Request $request, Room $id){
        // $room = Room::where('id', $id);
        // dd($room->id);
        // $room = $id;
        // dd($room);
        // dd($request->room);

        return view('user.booking.booking', [
            "title" => "Booking",
            'room' => $id,
            'checkInDate' => $request->checkInDate,
            'checkOutDate' => $request->checkOutDate,
            'totalGuest' => $request->totalGuest
        ]);
    }

    public function bookingPayment(Request $request){
        $rules = [
            'fullName' => 'required',
            'email' => 'required|email',
            'countryRegion' => 'required',
            'phoneNumber' => 'required|numeric'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // $roomssss = Room::find($request->roomId);
        // dd($roomssss->roomType);

        return view('user.booking.bookingPayment', [
            "title" => "Booking Payment",
            'fullName' => $request->fullName,
            'email' => $request->email,
            'countryRegion' => $request->countryRegion,
            'phoneNumber' => $request->phoneNumber,
            'room' => Room::find($request->roomId),
            'checkInDate' => $request->checkInDate,
            'checkOutDate' => $request->checkOutDate,
            'totalGuest' => $request->totalGuest,
            'totalCharges' => $request->totalCharges
        ]);
    }

    public function recipe(){
        return view('user.recipe.index', [
            "title" => "recipe"
        ]);
    }

    public function availability(Request $request){
        $rooms = Room::all();

        // dd($rooms->id);

        $rules = [
            'checkInDate' => 'required',
            'checkOutDate' => 'required',
            'totalGuest' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        return view('user.availability.index', [
            "title" => "availability",
            'rooms' => $rooms,
            'checkInDate' => $request->checkInDate,
            'checkOutDate' => $request->checkOutDate,
            'totalGuest' => $request->totalGuest
        ]);
    }

}
