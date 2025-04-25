<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //
    public function destroy(string $id)
    {
        // Find the page by ID
        $page = Property::findOrFail($id);

        // Delete the page
        $page->delete();

        // Redirect with success message
        return redirect()->back()->with('success', 'Properity deleted successfully.');
    }
    public function create()
    {
        return view('properity');
    }
    public function show()
    {
        $properity=Property::All();
        return view('properityView',compact('properity'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'developer_id' => 'required|integer',
            'location' => 'required|string|max:255',
            'community' => 'nullable|string|max:255',
            'bought_today' => 'nullable|integer',
            'view_currently' => 'nullable|integer',
            'booked_meet' => 'nullable|integer',
            'detail_list' => 'nullable|string',
            'payment_plan' => 'nullable|string|max:255',
            'aed_price' => 'nullable|numeric',
            'usd_price' => 'nullable|numeric',
            'gbp_price' => 'nullable|numeric',
            'rooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'video_url' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'community_id' => 'nullable|integer',
            'status' => 'required|in:1,0',
            'sort_order' => 'nullable|integer',
        ]);

        // dd($request->all());

        // Store image and video
        $imagePath = $request->file('images') ? $request->file('images')->store('images/properties', 'public') : null;
        $videoPath = $request->file('video_url') ? $request->file('video_url')->store('images/videos', 'public') : null;

        Property::create([
            'title' => $request->title,
            'developer_id' => $request->developer_id,
            'location' => $request->location,
            'community' => $request->community,
            'bought_today' => $request->bought_today,
            'view_currently' => $request->view_currently,
            'booked_meet' => $request->booked_meet,
            'detail_list' => $request->detail_list,
            'payment_plan' => $request->payment_plan,
            'aed_price' => $request->aed_price,
            'usd_price' => $request->usd_price,
            'gbp_price' => $request->gbp_price,
            'rooms' => $request->rooms,
            'bathrooms' => $request->bathrooms,
            'video_url' => $videoPath,
            'images' => $imagePath,
            'community_id' => $request->community_id,
            'status' => $request->status,
            'sort_order' => $request->sort_order,
        ]);

        return redirect()->route('home')->with('success', 'Property added successfully!');
    }
}
