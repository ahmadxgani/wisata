<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display dashboard view
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('user.dashboard', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'name' => 'required|string',
            'category_id' => 'required',
            'link' => 'required|string',
            'address' => 'required|string',
            'upload_photo' => 'required|image'
        ]);
     
        $fileName = time() . '.' . $request->upload_photo->extension();
        $request->upload_photo->storeAS('public/image', $fileName);

        $dest = new Destination;
        $dest->name = $request->input('name');
        $dest->link = $request->input('link');
        $dest->address = $request->input('address');
        $dest->category_id = $request->input('category_id');
        $dest->description = $request->input('description');
        $dest->photo_path = $fileName;
        $dest->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        $destination = Destination::where('name', $name)->first();
        if (!$destination) abort(404);
        return view('destinasi.detail', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('dashboard');
    }
}
