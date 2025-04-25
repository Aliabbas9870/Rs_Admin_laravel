<?php

namespace App\Http\Controllers;
use App\Models\Why;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    //
    public function create()
    {
        return view('why');
    }

    public function show()
    {
        $why=Why::All();
        $whySections = Why::all();
        return view('whyView',compact("whySections"));
    }
    public function destroy(string $id)
    {
        // Find the page by ID
        $page = Why::findOrFail($id);

        // Delete the page
        $page->delete();

        // Redirect with success message
        return redirect()->back()->with('success', 'Why deleted successfully.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'developer_id' => 'required|integer',
            'why_section1' => 'nullable|string',
            'why_1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'why_section2' => 'nullable|string',
            'why_2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'why_section3' => 'nullable|string',
        ]);

        $whySection = new Why();
        $whySection->developer_id = $request->developer_id;
        $whySection->why_section1 = $request->why_section1;
        $whySection->why_section2 = $request->why_section2;
        $whySection->why_section3 = $request->why_section3;

        if ($request->hasFile('why_1_image')) {
            $whySection->why_1_image = $request->file('why_1_image')->store('images/why', 'public');
        }

        if ($request->hasFile('why_2_image')) {
            $whySection->why_2_image = $request->file('why_2_image')->store('images/why', 'public');
        }

        $whySection->save();

        return redirect()->back()->with('success', 'Why Section added successfully!');
    }
}
