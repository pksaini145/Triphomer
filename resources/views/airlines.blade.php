@section('title','Airlines - Triphomer')
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

    <!-- Book Cheap hotel Start -->

    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb as-custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Triphomer</a></li>
                    <li class="breadcrumb-item"><a href="flight-destination.html">Flights</a></li>
                    <li class="breadcrumb-item active" aria-current="page">American Airline</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="as-book-cheap-heading">Top Les Vegas (LAS) Flight Deals <small style="color:#969c9e">Last
                        Updated Apr 12, 2021 <span>12:00 AM</span></small></h3>

            </div>
        </div>
        <h3 class="flight-box-heading"> <span>Round Trip</span> Flight Deals</h3>

        <div class="row">
            <div class="col-lg-6 ">
                <div class="row as-top-flight-box">
                    <div class="col-lg-2 as-top-flight-logo">
                        <img src="assets/img/air-logo.png" alt="">
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
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
                     <a href="listing.html"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ">
                <div class="row as-top-flight-box">
                    <div class="col-lg-2 as-top-flight-logo">
                        <img src="assets/img/air-logo.png" alt="">
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
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
                         <a href="listing.html"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 ">
                <div class="row as-top-flight-box">
                    <div class="col-lg-2 as-top-flight-logo">
                        <img src="assets/img/checkout-img/flydubai.gif" alt="">
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
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
                         <a href="listing.html"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ">
                <div class="row as-top-flight-box">
                    <div class="col-lg-2 as-top-flight-logo">
                        <img src="assets/img/checkout-img/flydubai.gif" alt="">
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
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
                         <a href="listing.html"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 ">
                <div class="row as-top-flight-box">
                    <div class="col-lg-2 as-top-flight-logo">
                        <img src="assets/img/air-logo.png" alt="">
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
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

                    <div class="col-lg-3 col-md-3 col-12 col-lg-3 col-md-3 col-12 deals-book-now-btn">
                         <a href="listing.html"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ">
                <div class="row as-top-flight-box">
                    <div class="col-lg-2 as-top-flight-logo">
                        <img src="assets/img/air-logo.png" alt="">
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
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
                         <a href="listing.html"><button type="button" class="btn as-top-flight-btn">Book Now</button></a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="as-book-cheap-heading"> American Airlines Flight Reservations on <b>Triphomer</b> </h3>
        <p class="as-book-cheap-content">American Airlines (AS) is currently the fifth largest airline in the USA. The
            carrier was established as McGee Airways in 1932 and has since been taking travelers to some of the most
            popular cities in and around the United States. Headquartered at Seattle-Tacoma International Airport,
            American Airlines operates flights to over 116 destinations in the United States, Canada, Mexico, and Costa
            Rica. The airline boasts of about 330 modern and fuel-efficient aircraft. You can book cheap American
            Airlines flight tickets on MyFlightSearch and fly to your favorite destinations without exceeding your
            budget. Make your American Airlines reservation with us and save big. </p>


        <div class="row">
            <div class="col-lg-12 mt-3 mb-2 flight-destination-content">
                <h3>American Airlines In-Flight Amenities</h3>
                <p> Recipient of many accolades, American Airlines offers some of the best amenities and services in the
                    air. Book cheap American Airlines tickets on MyFlightSearch and get set for a comfortable yet
                    affordable flight.</p>
                <ul class="detail-list">
                    <li>Alaskan Airlines features custom Recaro leather seats with power outlet and free Wi-Fi in most
                        planes.</li>
                    <li>The carrier serves customary West-Coast meals.</li>
                    <li>Passengers in cabin class can buy cocktails, beer, wines and other beverages onboard.</li>
                    <li>Passengers in can order a meal up to 24 hours before departure time on cross-country and Hawaii
                        flights.</li>
                    <li>Domestic travelers can enjoy American Beyond entertainment service that includes movies and TV
                        shows on personal devices such as phone, laptop or tablet.</li>
                    <li>Passengers flying to international destinations can rent tablets loaded with popular movies,
                        music, and TV shows.</li>
                </ul>

                <h3>American Airlines Classes of Service</h3>
                <h4>First Class</h4>
                <ul class="detail-list">
                    <li>Sign up for our newsletters to receive special offers and discounts on airfares to Las Vegas in
                        your inbox.</li>
                    <li>Find discount coupons and codes on the internet and use them while making your flight booking to
                        cut down Las Vegas airfares.</li>
                    <li>Bundle up your Las Vegas flights, hotels and car bookings and save both time and money.</li>
                    <li>Try different departure and return dates to find the cheapest return plane tickets to Las Vegas
                        and maximize your savings.</li>
                    <li>Look for code share flights to grab cheap tickets to Las Vegas.</li>
                    <li>Add one or more stops on your route and find cheap airline tickets to Las Vegas.</li>
                    <li>Compare flight fares to Las Vegas from all the airports near your origin city and book the
                        cheapest air tickets.</li>
                </ul>

                <h4>Premium Class</h4>
                <ul class="detail-list">
                    <li>Comfortable leather seats with easily accessible power outlets.</li>
                    <li>Extra legroom as compared to economy or main cabin seats.</li>
                    <li>Priority boarding.</li>
                    <li>Free movies and TV serials can be enjoyed on personal devices through Gogo Inflight Internet.
                    </li>
                </ul>

                <h4>Economy Class</h4>
                <ul class="detail-list">
                    <li>American Airlines economy class is called main cabin.</li>
                    <li>Complimentary snacks and beverages.</li>
                    <li>Meal can be purchased.</li>
                    <li>All seats are provided with power outlets.</li>
                    <li>Free movies and TV shows can be accessed on personal devices.</li>
                </ul>
<h3>American Airlines Web Check-In</h3>
<p> Travelers flying with American Airlines can check-in online using their phones, tablets, and computers. The service can be availed up to 24 hours before the scheduled departure of their flights. Passengers can also print boarding passes, choose seats and upgrade to luxury class using this service.</p>
<h3>American Airlines Mileage Plan</h3>
<p>American Airlines features an award winning frequent flyer program called Mileage Plan. The members of this program earn mileage programs for flying with American Airlines or its partners. The accumulated points can be redeemed for flight discounts, hotel stays and other travel products. Mileage Plan’s elite tiers come with added perks and benefits such as priority boarding and complimentary upgrades.</p>
<h3>American Airlines Main Hub</h3>
<p>Seattle–Tacoma International Airport (SEA) is the central hub airport for American Airlines with secondary hubs located in Anchorage, Los Angeles, Portland and San Francisco. The primary hub airport of the airline, Seattle–Tacoma International Airport is the eighth-busiest in the United States in terms of passenger traffic.
    Major airlines which fly to and from Seattle–Tacoma International Airport include Aer Lingus, Aeromexico, Air France, Air Canada Express, American Airlines, British Airways, Emirates,, Delta Air Lines, Lufthansa, Qatar Airways, United Airlines, Korean Air and many others.</p>
    <h3>American Airlines Most Popular Routes</h3>
    <p>A popular airline among leisure as well as business travelers, American Airlines operates flights between top domestic as well as international cities. Some of American Airlines most popular routes are: Seattle to Los Angeles, Los Angeles to New York City, Las Vegas to Los Angeles, Spokane to Seattle, San Francisco to Los Angeles</p>



            </div>
        </div>
    </div>

    <!-- Book Cheap hotel End -->

    
@endsection