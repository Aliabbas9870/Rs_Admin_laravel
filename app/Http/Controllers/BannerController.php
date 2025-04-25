<?php

namespace App\Http\Controllers;
use App\Models\Banner; // Import Banner model
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function create()
    {
        return view('bannerSlider'); // Load the Blade view
    }

    public function show()
    {
        $banners = Banner::all();
        return view('bannerSliderView',compact("banners")); // Load the Blade view
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Delete image if exists
   
        $banner->delete();
        return redirect()->route('home')->with('success', 'Banner deleted successfully');
    }
    public function store(Request $request)
{
    $request->validate([
        'page_id' => 'required|integer',
        'tag_line' => 'required|string|max:255',
        'heading' => 'required|string|max:255',
        'banner_desc' => 'required|string',
        'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:1,0',
    ]);

    // Store the image
    $imagePath = $request->file('banner_image')->store('images/banners', 'public');

    // Create and save the model
    $banner = new Banner();
    $banner->page_id = $request->page_id;
    $banner->tag_line = $request->tag_line;
    $banner->heading = $request->heading;
    $banner->banner_desc = $request->banner_desc;
    $banner->banner_image = $imagePath;
    $banner->status = (int) $request->status;
    $banner->save();

    return redirect()->route('home')->with('success', 'Banner added successfully!');
}

}
