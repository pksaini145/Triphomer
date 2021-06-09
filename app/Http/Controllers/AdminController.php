<?php

namespace App\Http\Controllers;
use App\Page;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pages(){
        $pages = Page::all();
        return view('dashboard.pages',compact('pages'));
    }
    public function edit_page($id){
        $pages = Page::find($id);
        return view('dashboard.edit_page',compact('pages'));
    }

    public function update_page(Request $request,$id){
        // echo"<pre>";
        // print_r($request->all());
        // die();
         $request->validate([
            'heading' => 'required'
            ]);
        $page = Page::find($id);
        $page->heading = $request->heading;
        $page->subheading = $request->subheading;
        $page->hero_heading = $request->hero_heading;
        $page->content = $request->content;
        $page->seo_title = $request->seo_title;
        $page->gp_title = $request->gp_title;
        $page->fb_title = $request->fb_title;
        $page->cnonical_tag = $request->cnonical_tag;
        $page->seo_keywords = $request->seo_keywords;
        $page->seo_desc = $request->seo_desc;
        $page->fb_desc = $request->fb_desc;
        $page->gp_desc = $request->gp_desc;
        $page->seo_url = $request->seo_url;
        $page->footer_link = $request->footer_link;
        $page->index = $request->index;
        $page->deal = $request->deal;
        $page->content_variation = $request->content_variation;
        $page->status = $request->status;
        $page->save();
        return redirect(route('pages'))->with('success','Page Updated Successfully.');
        
    }
    public function save_page(Request $request){
        // echo"<pre>";
        // print_r($request->all());
        // die();
        $request->validate([
            'heading' => 'required',
            'slug' => 'required|unique:pages,slug'
            ]);
        $page = new Page;
        $page->heading = $request->heading;
        $page->subheading = $request->subheading;
        $page->hero_heading = $request->hero_heading;
        $page->content = $request->content;
        $page->seo_title = $request->seo_title;
        $page->slug = $request->slug;
        $page->gp_title = $request->gp_title;
        $page->fb_title = $request->fb_title;
        $page->cnonical_tag = $request->cnonical_tag;
        $page->seo_keywords = $request->seo_keywords;
        $page->seo_desc = $request->seo_desc;
        $page->fb_desc = $request->fb_desc;
        $page->gp_desc = $request->gp_desc;
        $page->seo_url = $request->seo_url;
        $page->footer_link = $request->footer_link;
        $page->index = $request->index;
        $page->deal = $request->deal;
        $page->content_variation = $request->content_variation;
        $page->status = $request->status;
        $page->save();
        return redirect(route('pages'))->with('success','Page Stored Successfully.');
    }
}
