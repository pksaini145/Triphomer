<?php

namespace App\Http\Controllers;

use App\Page;
use App\Flight;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $page = Page::where('slug','home')->first();
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();

        return view('home',compact('page','flight_destinations','flight_destinations2'));
    }
    public function sitemap(){
        // $page = Page::where('slug','home')->first();
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();

        return view('sitemap',compact('flight_destinations','flight_destinations2'));
    }
    public function hotels(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotels',compact('flight_destinations','flight_destinations2'));
    }
    public function flights(Request $request){
        $segmentdes = $request->segment(2);
        if ($segmentdes) {
            $page = Flight::where('slug',$segmentdes)->first();
        }else{
            $page = Page::where('slug','flights')->first();
        }
            

            $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
             //dd($flight_destinations);
        return view('flights',compact('page','flight_destinations','flight_destinations2'));
    }
    public function cars(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('cars',compact('flight_destinations','flight_destinations2'));
    }

    public function mytrip(){
    
        return view('mytrip');
    }

    public function login(){
        return view('login');
    }
    public function help(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('help',compact('flight_destinations','flight_destinations2'));
    }
    public function about(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();

            // dd($flight_destinations2);
        return view('about',compact('flight_destinations','flight_destinations2'));
    }
    public function contact(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('contact',compact('flight_destinations','flight_destinations2'));
    }
    public function privacy(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('privacy',compact('flight_destinations','flight_destinations2'));
    }

    public function terms(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('terms',compact('flight_destinations','flight_destinations2'));
    }

    public function airlines(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('airlines',compact('flight_destinations','flight_destinations2'));
    }
    public function hotel_destinations(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotel_destinations',compact('flight_destinations','flight_destinations2'));
    }
    public function flight_destinations(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights',compact('flight_destinations','flight_destinations2'));
    }
    public function flight_listing(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights.listing',compact('flight_destinations','flight_destinations2'));
    }
    public function flight_payment(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights.payment',compact('flight_destinations','flight_destinations2'));
    }
    public function hotel_listing(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotels.listing',compact('flight_destinations','flight_destinations2'));
    }
    public function hotel_payment(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotels.payment',compact('flight_destinations','flight_destinations2'));
    }
}
