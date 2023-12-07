<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.room.index', [
            'rooms' => Room::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'roomType' => 'required',
            'roomImage' => 'required|image|max:5000',
            'roomDesc' => 'required',
            'roomPrice' => 'required',
            'roomQuantity' => 'required',
        ]);

        $room = new Room($request->all());

        $fileName = $request->roomImage->getClientOriginalName();
        $path = $request->roomImage->storeAs('images/rooms', $fileName, 'public');

        $room->roomImage = $fileName;
        $room->save();

        // $input = $request->all();
        // Room::create($input);

        return redirect('/admin/room')->with('success', 'Room Added !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rooms = Room::find($id);

        return view('admin.room.show', [
            'rooms' => $rooms
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rooms = Room::find($id);

        return view('admin.room.edit', [
            'rooms' => $rooms
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rooms = Room::find($id);
        $fileName = '';

        $request->validate([
            'roomType' => 'required',
            'roomImage' => 'image|max:5000',
            'roomDesc' => 'required',
            'roomPrice' => 'required',
            'roomQuantity' => 'required',
        ]);

        if ($request->hasFile('roomImage')) {
            $fileName = $request->roomImage->getClientOriginalName();
            $path = $request->roomImage->storeAs('images/rooms', $fileName, 'public');

            if ($rooms->roomImage) {
                // dd($rooms->roomImage);
                Storage::delete('public/images/rooms/' . $rooms->roomImage);
            }
        }
        else {
            $fileName = $rooms->roomImage;
        }

        $rooms->roomType = $request->roomType;
        $rooms->roomImage = $fileName;
        $rooms->roomDesc = $request->roomDesc;
        $rooms->roomPrice = $request->roomPrice;
        $rooms->roomQuantity = $request->roomQuantity;
        $rooms->save();

        // $input = $request->all();
        // $rooms->update($input);

        return redirect('/admin/room')->with('success', 'Room Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rooms = Room::find($id);

        if ($rooms->roomImage) {
            Storage::delete('public/images/rooms/' . $rooms->roomImage);
        }

        $rooms->delete();

        return redirect('/admin/room')->with('success', 'Room Deleted !!!');
    }
}
