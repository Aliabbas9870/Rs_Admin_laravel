<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //
    // public function index()
    // {
    //     $galleries = Gallery::all();
    //     return view('gallery', compact('galleries'));
    // }


    public function show()
    {
        $pages = Gallery::all();
        return view('galleryView', compact('pages'));
    }

    public function destroy($id)
    {
        $page = Gallery::findOrFail($id);
        $page->delete();
        return redirect()->back()->with('success', 'Page deleted successfully');
    }
    public function create()
    {
        return view('gallery');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|integer',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer',
        ]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        $imageName = time().'.'.$request->image_path->extension();
        $request->image_path->move(public_path('images/gallery'), $imageName);

        Gallery::create([
            'page_id' => $request->page_id,
            'image_path' => 'uploads/gallery/' . $imageName,
            'status' => $request->status,
            'sort_order' => $request->sort_order,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully!');
    }
}
 