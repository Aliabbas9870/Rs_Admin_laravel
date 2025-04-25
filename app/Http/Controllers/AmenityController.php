<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenity;

class AmenityController extends Controller
{
    //
    public function create()
    {
        return view('ammenities');
    }

    public function show()
    {
        $amenities = Amenity::all();
        return view('ammenitiesView',compact('amenities'));
    }
    public function destroy($id)
    {
        $amenity = Amenity::findOrFail($id);
        
        // Delete image if exists
        // if ($amenity->img1) {
        //     Storage::disk('public')->delete($amenity->img1);
        // }

        $amenity->delete();
        return redirect()->route('home')->with('success', 'Amenity deleted successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|integer',
            'developer_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'status' => 'required|integer|in:0,1', // Ensure status is an integer
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $amenity = new Amenity();
        $amenity->page_id = $request->page_id;
        $amenity->developer_id = $request->developer_id;
        $amenity->title = $request->title;
        $amenity->status = (int) $request->status; // Ensure status is saved as an integer

        if ($request->hasFile('img1')) {
            $amenity->img1 = $request->file('img1')->store('images/amenities', 'public');
        }
        // dd($request->all());


        $amenity->save();

        return redirect()->route('home')->with('success', 'Amenity added successfully!');
    }



}
