<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faq = Faq::all();

        return view('faq',compact("faq"));
    }


    public function show(){
        $faq = Faq::all();

        return view('faqView',compact("faq"));
    }


    public function create()
    {
        return view('faq');
    }

    // Store FAQ
    public function store(Request $request)
    {
        $request->validate([

            'question' => 'required|string',
            'answer' => 'required|string',
            'page_id' => 'nullable|integer',
            'developer_id' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        Faq::create($request->all());

        return redirect()->back()->with('success', 'FAQ added successfully!');
    }

    public function destroy(string $id)
    {
        $page = Faq::findOrFail($id);

        // Delete the page
        $page->delete();

        // Redirect with success message
        return redirect()->route("home")->with('success', 'FAQs deleted successfully.');

    }
    // Show all FAQs
    /**
     * Store a newly created resource in storage.
     */


    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */

}
