@section('title','Sitemap')
@extends('layouts.home')
@section('content')
<!--  Sitemap Start -->
    <section class="st_map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site_map_bx">
                        <h2>Site Map</h2>
                        <p>We do offer latest flight fares to all major destinations across the globe.Here is the full
                            list of all major destinations &amp; quick links to access this website.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="site_cat">
                        <h3>Quick Links</h3>
                        <ul>
                            <li> <a href="{{ route('home') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Home </a></li>
                            <li> <a href="{{ route('flights') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Flights </a></li>
                            <li> <a href="{{ route('hotels') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Hotels </a></li>
                            <li> <a href="{{ route('cars') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Cars </a></li>
                            <li> <a href="{{ route('airlines') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Airlines </a></li>
                            <li> <a href="{{ route('about') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> About us </a></li>
                            <li> <a href="{{ route('contact') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Contact us </a></li>
                            <li> <a href="#"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Blogs </a></li>
                            
                            

                            <li> <a href="{{ route('privacy') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Privacy policy </a>
                            </li>
                            <li> <a href="{{ route('terms') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Terms and Services
                                </a></li>
                                <li> <a href="{{ route('help') }}"> <img src="{{ asset('/assets/img/dynamic-li-arrow.png')}}"> Help
                                </a></li>
                            <!-- <li> <a href="freeCancellation.html"> <img src="assets/img/dynamic-li-arrow.png"> Refund
                                    &amp; Cancellation Policy </a></li> -->
                            

                        </ul>
                    </div>
                    <div class="site_cat">
                        <h3>Domestic Destinations</h3>
                        <ul>

                           <!--  <li> <a href="# "> <img
                                        src="assets/img/dynamic-li-arrow.png"> Alaska Flights </a></li> -->

                                        @if(isset($flight_destinations2))
                     @foreach($flight_destinations2 as $flight2)
                    <li ><a  href="{{ route('flights', $flight2->slug)}}"><img
                                        src="{{ asset('/assets/img/dynamic-li-arrow.png')}}">{{ $flight2->heading }}</a></li>
                    @endforeach
                    @endif
                            
                        </ul>
                    </div>

                    <div class="site_cat">
                        <h3>International Destinations</h3>
                        <ul>


                           <!--  <li> <a href="https://skyhikes.com/International/flight-to-Madrid"> <img
                                        src="assets/img/dynamic-li-arrow.png"> Madrid Flights</a></li> -->

                            @if(isset($flight_destinations))
                     @foreach($flight_destinations as $flightl)
                    <li ><a href="{{ route('flights', $flightl->slug)}}"><img
                                        src="{{ asset('/assets/img/dynamic-li-arrow.png')}}">{{ $flightl->heading }}</a></li>
                    @endforeach
                    @endif
                        </ul>
                    </div>

                    <!-- <div class="site_cat">
                        <h3>Major Airlines</h3>
                        <ul>


                            <li> <a href="https://skyhikes.com/airlines/Aeromexico"> <img
                                        src="assets/img/dynamic-li-arrow.png"> Aeromexico </a> </li>

                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Sitemap end -->
    <style type="text/css">
    	.cheap_ticket,section.footer-area.section-bg.padding-bottom-30px,section.as-payment-icon{
    		display: none;
    	}
    </style>
@endsection