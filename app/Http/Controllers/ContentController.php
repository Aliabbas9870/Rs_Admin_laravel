<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    //
    // Show the form


    public function show()
    {
        $content = Content::all();

        return view('contentView',compact("content"));
    }

    public function create()
    {
        return view('content');
    }


    public function destroy(string $id)
    {
        $page = Content::findOrFail($id);

        // Delete the page
        $page->delete();

        // Redirect with success message
        return redirect()->route("home")->with('success', 'Content deleted successfully.');

    }
    // Store data in database

    public function store(Request $request)
{
    $request->validate([
        'page_id' => 'required|integer',
        'page_type_id' => 'required|integer',
        'title' => 'required|string|max:255',
        'meta' => 'nullable|string|max:255',
        'h1' => 'nullable|string|max:255',
        'h2' => 'nullable|string|max:255',
        'h3' => 'nullable|string|max:255',
        'h4' => 'nullable|string|max:255',
        'h5' => 'nullable|string|max:255',
        'h6' => 'nullable|string|max:255',
        'para1' => 'nullable|string',
        'para2' => 'nullable|string',
        'created_at' => 'nullable|date',
        'updated_at' => 'nullable|date',
        'updated_by' => 'nullable|string|max:255',
        'status' => 'required',
    ]);

    // Convert status value to boolean (1 for active, 0 for inactive)
    $data = $request->all();
    $data['status'] = $request->status == 'active' ? 1 : 0;

    Content::create($data);

    return redirect()->route('home')->with('success', 'Content added successfully!');
}

}
