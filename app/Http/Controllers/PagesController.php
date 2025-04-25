<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;


use Illuminate\Http\Request;
use App\Models\Pages;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function show()
    {
        $page = Pages::all();

        return view("pageView",compact("page"));
        //
    }
    public function index()
    {
        return view("pages");
        //
    }

    public function destroy(string $id)
    {
        // Find the page by ID
        $page = Pages::findOrFail($id);

        // Delete the page
        $page->delete();

        // Redirect with success message
        return redirect()->back()->with('success', 'Page deleted successfully.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'page_type_id' => 'required|integer',
            'developer_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_video' => 'nullable|file|mimetypes:video/mp4,video/avi,video/quicktime|max:10000',
            'phone' => 'nullable|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'payment_plan' => 'nullable|string|max:255',
            'map_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nearby' => 'nullable|string|max:255',
            'community_amnity' => 'nullable|string|max:255',
            'points' => 'nullable|string',
            'contant_info' => 'nullable|string',
            'status' => 'required|boolean',
            'Fshow' => 'required|boolean',
        ]);

        // Check if slug is provided
        if (!empty($data['slug'])) {
            // Ensure the slug is unique
            if (Pages::where('slug', $data['slug'])->exists()) {
                $data['slug'] .= '-' . time(); // Append timestamp if exists
            }
        } else {
            // Generate slug from name if not provided
            $data['slug'] = Str::slug($data['name']);

            // Ensure uniqueness
            if (Pages::where('slug', $data['slug'])->exists()) {
                $data['slug'] .= '-' . time();
            }
        }

        $page = new Pages();
        foreach ($data as $key => $value) {
            $page->$key = $value;
        }

        // Handle file uploads
        foreach (['banner_image', 'about_image', 'about_video', 'map_pic'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $page->$fileField = $request->file($fileField)->store('uploads/pages', 'public');
            }
        }

        $page->save();

        return redirect()->route('home')->with('success', 'Page added successfully!');
    }


    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
