@section('title','Flight Destination - Triphomer')
@extends('layouts.home')
@section('content')
@if($page->hero_heading)
@include('heroSection',['title'=>$page->hero_heading])
@else
@include('heroSection')
@endif
<!-- START SERVICE AREA -->
<section id="as-serviceBox" style="margin:30px 0px;">
    <!-- {{ Request::segment(2) }}  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 text-center as-whybook-content ">
                <div class="row ">
                    <div class="col-lg-12">
                        <h2>Why Book With Us?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-4 as-whybook-sub-content">

                        <img src="{{ asset('/assets/img/service-right-icon.png') }}" alt="service-right"
                            class="as-service-content-img">
                        <br>
                        <p>Best Prices<br>GUARANTEED</p>

                    </div>
                    <div class="col-lg-4 col-4 as-whybook-sub-content">
                        <img src="{{ asset('/assets/img/service-24-icon.png') }}" alt="service-24" class="as-service-content-img">
                        <br>
                        <p>24/7 Booking<br>Assistance</p>
                    </div>

                    <div class="col-lg-4 col-4 ">
                        <img src="{{ asset('/assets/img/service-secure-icon.png') }}" alt="service-secure"
                            class="as-service-content-img"> <br>
                        <p>Fast, Easy &amp; Secure<br>Reservations</p>
                    </div>
                </div>
            </div>
            <div class="as-whybook-content signUpWarp  ">
                <div class="row">
                    <div class="col-lg-10 col-10 mx-auto">
                        <div class="sign-up-box text-center">
                            <h2 class="sign-box-h2">Exclusive Deals</h2>
                            <p>Sign up and get the latest deals - delivered right to your inbox.</p>
                            <div class="exclusiveFiled">
                                <input type="text" class="subcribe-filed" id="txtsubemail"
                                    placeholder="Enter your email address">
                                <input type="submit" id="EmailSignup" class="submit"
                                    onclick="return SendNewsLetterEmail(true);" value="subscribe">
                                <div class="subcribe-msg" id="subcribe-msg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- END SERVICE AREA -->

<!-- Breadcrumb Area Start -->

<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb ">
             <ol class="breadcrumb as-custom-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Triphomer</a></li>
            @if(Request::segment(2))
            <li class="breadcrumb-item"><a href="{{ route('flights') }}">Flights</a></li>
            <li class="breadcrumb-item">{{ $page->heading }}</li>
            @else
            <li class="breadcrumb-item">{{ $page->heading }}</li>
            @endif
            </ol>
           
                
            
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Book Cheap hotel Start -->

<div class="container">

    
    <h3 class="flight-box-heading"><span>Top Flights Deal</span></h3>
    <div class="row">
        <div class="col-lg-6 ">
            <div class="row as-top-flight-box">
                
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-3 as-top-flight-city">
                            <h6>Los Vegas</h6>
                            <span>Apr 19, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <i class="fa fa-exchange-alt"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 as-top-flight-city">
                            <h6>San Diego</h6>
                            <span>Apr 24, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-3">
                            <span>$76.30</span>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-12 deals-book-now-btn">
                    <a href="{{ route('flight_listing') }}"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="row as-top-flight-box">
                
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-3 as-top-flight-city">
                            <h6>Los Vegas</h6>
                            <span>Apr 19, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <i class="fa fa-exchange-alt"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 as-top-flight-city">
                            <h6>San Diego</h6>
                            <span>Apr 24, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-3">
                            <span>$76.30</span>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-12 deals-book-now-btn">
                    <a href="{{ route('flight_listing') }}"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 ">
            <div class="row as-top-flight-box">
                
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-3 as-top-flight-city">
                            <h6>Los Vegas</h6>
                            <span>Apr 19, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <i class="fa fa-exchange-alt"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 as-top-flight-city">
                            <h6>San Diego</h6>
                            <span>Apr 24, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-3">
                            <span>$76.30</span>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-12 deals-book-now-btn">
                    <a href="{{ route('flight_listing') }}"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="row as-top-flight-box">
                
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-3 as-top-flight-city">
                            <h6>Los Vegas</h6>
                            <span>Apr 19, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <i class="fa fa-exchange-alt"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 as-top-flight-city">
                            <h6>San Diego</h6>
                            <span>Apr 24, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-3">
                            <span>$76.30</span>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-12 deals-book-now-btn">
                    <a href="{{ route('flight_listing') }}"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 ">
            <div class="row as-top-flight-box">
                
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-3 as-top-flight-city">
                            <h6>Los Vegas</h6>
                            <span>Apr 19, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <i class="fa fa-exchange-alt"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 as-top-flight-city">
                            <h6>San Diego</h6>
                            <span>Apr 24, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-3">
                            <span>$76.30</span>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-12 deals-book-now-btn">
                    <a href="{{ route('flight_listing') }}"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="row as-top-flight-box">
                
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-3 as-top-flight-city">
                            <h6>Los Vegas</h6>
                            <span>Apr 19, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <i class="fa fa-exchange-alt"></i>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 as-top-flight-city">
                            <h6>San Diego</h6>
                            <span>Apr 24, 2021</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-3">
                            <span>$76.30</span>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-12 deals-book-now-btn">
                    <a href="{{ route('flight_listing') }}"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                </div>
            </div>
        </div>
    </div>

    


    

    
<div class="row">
            <div class="col-lg-12 mt-3 mb-2 flight-destination-content">
    @php
    echo $page->content;
    @endphp

</div>
</div>
</div>

<!-- Book Cheap hotel End -->
    
@endsection