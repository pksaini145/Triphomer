<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class FlightController extends Controller
{
    public function innerpages()
    {
        $pages = Flight::all();
        // return view('dashboard.pages',compact('pages'));
    	return view('dashboard.flights.inner_pages',compact('pages'));
    }
    public function add_inner_page()
    {
    	return view('dashboard.flights.add_inner');
    }
    public function edit_inner_page($id)
    {
        $pages = Flight::find($id);
        // dd($page);
        return view('dashboard.flights.edit_inner',compact('pages'));
    }
    public function update_inner_page(Request $request,$id)
    {
        $flight = Flight::find($id);
        // dd($flight);
        $request->validate([
            'heading' => 'required',
            'type' => 'required',
            'slug' => 'required|unique:flights,slug,'.$flight->id
            ]);
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->slug)));
        $flight->heading = $request->heading;
        $flight->subheading = $request->subheading;
        $flight->hero_heading = $request->hero_heading;
        $flight->slug = $slug;
        $flight->type = $request->type;
        $flight->content = $request->content;
        $flight->seo_title = $request->seo_title;
        $flight->gp_title = $request->gp_title;
        $flight->fb_title = $request->fb_title;
        // $flight->cnonical_tag = $request->cnonical_tag;
        $flight->seo_keywords = $request->seo_keywords;
        $flight->seo_desc = $request->seo_desc;
        $flight->fb_desc = $request->fb_desc;
        $flight->gp_desc = $request->gp_desc;
        $flight->seo_url = $request->seo_url;
        $flight->footer_link = $request->footer_link;
        $flight->index = $request->index;
        $flight->deal = $request->deal;
        $flight->content_variation = $request->content_variation;
        $flight->status = $request->status;
        $flight->save();
        return redirect(route('flight.inner.pages'))->with('success','Inner Page Updated Successfully.');
        // return view('dashboard.flights.add_inner');
    }
    public function save_inner_page(Request $request)
    {
    	$request->validate([
            'heading' => 'required',
            'type' => 'required',
            'slug' => 'required|unique:flights,slug'
            ]);
    	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->slug)));
    	$flight = new Flight;
        $flight->heading = $request->heading;
        $flight->subheading = $request->subheading;
        $flight->hero_heading = $request->hero_heading;
        $flight->content = $request->content;
        $flight->seo_title = $request->seo_title;
        $flight->type = $request->type;
        $flight->slug = $slug;
        $flight->gp_title = $request->gp_title;
        $flight->fb_title = $request->fb_title;
        // $flight->cnonical_tag = $request->cnonical_tag;
        $flight->seo_keywords = $request->seo_keywords;
        $flight->seo_desc = $request->seo_desc;
        $flight->fb_desc = $request->fb_desc;
        $flight->gp_desc = $request->gp_desc;
        $flight->seo_url = $request->seo_url;
        $flight->footer_link = $request->footer_link;
        $flight->index = $request->index;
        $flight->deal = $request->deal;
        $flight->content_variation = $request->content_variation;
        $flight->status = $request->status;
        $flight->save();
        return redirect(route('flight.inner.pages'))->with('success','Flight Inner Page Stored Successfully.');
    }
}
