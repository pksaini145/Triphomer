@section('title','Hotels - Triphomer')
@extends('layouts.home')
@section('content')
@include('heroSection')
 <!-- START SERVICE AREA -->
 <section id="as-serviceBox" style="margin:30px 0px;">
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

                        <img src="assets/img/service-right-icon.png" alt="service-right"
                            class="as-service-content-img">
                        <br>
                        <p>Best Prices<br>GUARANTEED</p>

                    </div>
                    <div class="col-lg-4 col-4 as-whybook-sub-content">
                        <img src="assets/img/service-24-icon.png" alt="service-24" class="as-service-content-img">
                        <br>
                        <p>24/7 Booking<br>Assistance</p>
                    </div>

                    <div class="col-lg-4 col-4 ">
                        <img src="assets/img/service-secure-icon.png" alt="service-secure"
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
                <li class="breadcrumb-item"><a href="hotel.html">Hotel</a></li>
                <li class="breadcrumb-item"><a href="listing.html">Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="index.html"> Triphomer</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
@include('hotelSection')
    <!-- Book Cheap hotel Start -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="as-book-cheap-heading">Book Cheap Hotels on <b>Triphomer</b> </h3>
                <p class="as-book-cheap-content">Taking a vacation or going on a business Trip? Book your hotels rooms
                    on TRiphomer and enjoy a hassle free and budget friendly trip. We offer a wide selection of hotels
                    in top location across the planet at the lowest availables rates No matter what your need or budget
                    is, plan with us to get the best hotel rates for all sorts of accommodations. Book now and get your
                    hotel reservations instantly. With Triphomer you will find hotels from family friendly hotels to
                    couples only exclusive resorts from trendly business hotels to budet models. We have hotels for
                    every Kind of travels. We offer great saving on hotel deals, so you can save more to indulge more on
                    your vacations. </p>

                <h3 class="as-book-cheap-heading">Why Book with Triphomer</h3>
                <ul class="as-whybook-main-box">
                    <li class="why-book-cheap-contnet">
                        <img src="assets/img/hotel-icon.png" alt="">
                        <h6>Best Hotel Rate GUARANTEED</h6>
                    </li>
                    <li class=" why-book-cheap-contnet">
                        <img src="assets/img/24.7 Hotel Booking Assistance-01.png" alt="">
                        <h6>24/7 Hotel Booking Assistance</h6>
                    </li>
                    <li class=" why-book-cheap-contnet">
                        <img src="assets/img/Fast, Easy & Secure Reservations-01.png" alt="">
                        <h6>Fast, Easy & Secure Reservations</h6>
                    </li>
                    <li class=" why-book-cheap-contnet">
                        <img src="assets/img/Exclusive Hotel Deals-01.png" alt="">
                        <h6>Exclusive Hotel Deals</h6>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="as-book-cheap-heading">Browse by Property Type</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 browse-property-img-box">
                        <img src="assets/img/img1.jpg" alt="img1">
                        <div class="browse-property-top-heading">
                            <h6>Hyatt Regency San Francisco</h6>
                            <span> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                        </div>
                        <div class="browse-property-heading-box">
                            <h6>Hotels</h6>
                            <span>$22</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 browse-property-img-box">
                        <img src="assets/img/img2.jpg" alt="img1">
                        <div class="browse-property-top-heading">
                            <h6>Hyatt Regency San Francisco</h6>
                            <span> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                        </div>
                        <div class="browse-property-heading-box">
                            <h6>Apartments</h6>
                            <span>$26</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 browse-property-img-box">
                        <img src="assets/img/img3.jpg" alt="img1">
                        <div class="browse-property-top-heading">
                            <h6>Hyatt Regency San Francisco</h6>
                            <span> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                        </div>
                        <div class="browse-property-heading-box">
                            <h6>Villas</h6>
                            <span>$40</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 browse-property-img-box">
                        <img src="assets/img/img4.jpg" alt="img1">
                        <div class="browse-property-top-heading">
                            <h6>Hyatt Regency San Francisco</h6>
                            <span> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                        </div>
                        <div class="browse-property-heading-box">
                            <h6>Resorts</h6>
                            <span>$32</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Book Cheap hotel End -->
    
@endsection