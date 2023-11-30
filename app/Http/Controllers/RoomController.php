<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

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
            'roomImage' => 'required|url',
            'roomDesc' => 'required',
            'roomPrice' => 'required',
            'roomQuantity' => 'required',
        ]);

        $input = $request->all();
        Room::create($input);

        return redirect('/rooms')->with('success', 'Room Added !!!');
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

        $request->validate([
            'roomType' => 'required',
            'roomImage' => 'required|url',
            'roomDesc' => 'required',
            'roomPrice' => 'required',
            'roomQuantity' => 'required',
        ]);

        $input = $request->all();
        $rooms->update($input);

        return redirect('/rooms')->with('success', 'Room Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Room::destroy($id);

        return redirect('/rooms')->with('success', 'Room Deleted !!!');
    }
}
