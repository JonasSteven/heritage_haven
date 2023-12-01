<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gallery.index', [
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageName' => 'required',
            'image' => 'required|url',
        ]);

        $input = $request->all();
        Gallery::create($input);

        return redirect('/admin/gallery')->with('success', 'Gallery Added !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $galleries = Gallery::find($id);

        return view('admin.gallery.show', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galleries = Gallery::find($id);

        return view('admin.gallery.edit', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galleries = Gallery::find($id);

        $request->validate([
            'imageName' => 'required',
            'image' => 'required|url',
        ]);

        $input = $request->all();
        $galleries->update($input);

        return redirect('/admin/gallery')->with('success', 'Gallery Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gallery::destroy($id);

        return redirect('/admin/gallery')->with('success', 'Gallery Deleted !!!');
    }
}
