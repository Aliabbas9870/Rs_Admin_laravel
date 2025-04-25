<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends Controller
{
    //
    public function create()
    {
        return view('developer');
    }
    public function show()

    {

        $developers = Developer::all();
        return view('developerView',compact('developers'));
    }

    public function destroy($id)
    {
        $developer = Developer::findOrFail($id);

        // Delete image if exists
       
        

        $developer->delete();
        return redirect()->route('home')->with('success', 'Developer deleted successfully');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images/developers', 'public');
        }

        Developer::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photoPath,
            'icon_1_text' => $request->icon_1_text,
            'icon_2_text' => $request->icon_2_text,
            'icon_3_text' => $request->icon_3_text,
            'copyright_text' => $request->copyright_text,
            'sort_order' => $request->sort_order,
        ]);

        return redirect()->back()->with('success', 'Developer added successfully.');
    }
}
