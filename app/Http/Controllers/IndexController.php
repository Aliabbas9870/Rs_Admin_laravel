<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Why;
use App\Models\Amenity;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Faq;
use App\Models\Content;
use App\Models\Schedule;
use App\Models\Enquiry;
use App\Models\Banner;
use App\Models\Developer;
use App\Models\Pages;
use App\Models\Property;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

                // Get total count for each table
                $adminC=Admin::count();
                $pag = Pages::paginate(4);
                $schedule=Schedule::count();
                $amenityCount = Amenity::count();
                $propertyCount = Property::count();
                $galleryCount = Gallery::count();
                $faqCount = Faq::count();
                $faq = Faq::all();
                $whyCount = Why::count();
                $enquiry = Enquiry::count();
                $pages = Pages::count();
                $page = Pages::all();
                $content = Content::count();
                $developer = Developer::count();
                $bannerCount = Banner::count();
          return view("index", compact('amenityCount',"developer",
          'galleryCount',"pag",
          "content","schedule","enquiry","pages","page","faq",
           'faqCount','adminC',"whyCount","bannerCount","propertyCount"));

    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
