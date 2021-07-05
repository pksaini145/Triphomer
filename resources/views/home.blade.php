@section('title', 'Book Cheap Air Tickets, Cheap Flights Booking Online | TripHomer.com')
@extends('layouts.home')
@section('content')
@include('heroSection',['title'=>$page->hero_heading])
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
                                    placeholder="Your Email address">
                                <input type="submit" id="EmailSignup" class="submit" value="subscribe">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

<!-- 
END SERVICE AREA
-->

<!-- 
START ROUND-TRIP AREA
-->
<section class="round-trip-flight section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Popular Destination Around the Globe </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-40px">
            <div class="col-lg-12">
                <div class="flight-filter-tab text-center">
                    <div class="section-tab section-tab-3">
                        <ul class="nav nav-tabs justify-content-center" id="myTab4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="new-york-tab" data-toggle="tab" href="#new-york"
                                    role="tab" aria-controls="new-york" aria-selected="false">
                                    New York
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hong-kong-tab" data-toggle="tab" href="#hong-kong"
                                    role="tab" aria-controls="hong-kong" aria-selected="false">
                                    Hong Kong
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="beijing-tab" data-toggle="tab" href="#beijing" role="tab"
                                    aria-controls="beijing" aria-selected="false">
                                    Beijing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tokyo-tab" data-toggle="tab" href="#tokyo" role="tab"
                                    aria-controls="tokyo" aria-selected="false">
                                    Tokyo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="seoul-tab" data-toggle="tab" href="#seoul" role="tab"
                                    aria-controls="seoul" aria-selected="false">
                                    Seoul
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-tab -->
                </div>
                <!-- end flight-filter-tab -->
                @php
                                        $date = strtotime(date('Y-m-d H:i:s'));
                                        $date = strtotime("+30 day", $date);
                                        $dpdate = date("Y-m-d",strtotime("+30 days"));
                                        $rdate = strtotime("+7 day", $date);
                                        $apdate = date("Y-m-d",strtotime("+37 days"));
                                        $tdate = date('D, M d', $date);
                                        $trdate = date('D, M d', $rdate);
                                        @endphp
                <div class="popular-round-trip-wrap padding-top-40px">
                    <div class="tab-content" id="myTas-ul-hover-navontent4">
                        <div class="tab-pane fade show active" id="new-york" role="tabpanel"
                            aria-labelledby="new-york-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="JFK-John F Kennedy Intl,New York,United States">
                                        <input type="hidden" name="destination" value="LAX-Los Angeles Intl,Los Angeles,United States">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    New York<i class="fas fa-exchange-alt mx-2"></i>Los Angeles
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        
                                        
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="JFK-John F Kennedy Intl,New York,United States">
                                        <input type="hidden" name="destination" value="BCN-Barcelona,Barcelona,Spain">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img2.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    New York<i class="fas fa-exchange-alt mx-2"></i>Barcelona
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$740</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="JFK-John F Kennedy Intl,New York,United States">
                                        <input type="hidden" name="destination" value="DAL-Dallas Love Fld,Dallas,United States">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img3.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    New York<i class="fas fa-exchange-alt mx-2"></i>Dallas
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$140</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="JFK-John F Kennedy Intl,New York,United States">
                                        <input type="hidden" name="destination" value="SFO-San Francisco Intl,San Francisco,United States">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img4.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    New York<i class="fas fa-exchange-alt mx-2"></i>San Francisco
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="JFK-John F Kennedy Intl,New York,United States">
                                        <input type="hidden" name="destination" value="OXD-Miami University Airport,Oxford,United States">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img5.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    New York<i class="fas fa-exchange-alt mx-2"></i>Miami
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$100</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="JFK-John F Kennedy Intl,New York,United States">
                                        <input type="hidden" name="destination" value="YXU-London,London,Canada">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img6.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    New York<i class="fas fa-exchange-alt mx-2"></i>London
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$640</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="hong-kong" role="tabpanel" aria-labelledby="hong-kong-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="destination" value="XSP-Seletar,Singapore,Singapore">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img7.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Hong Kong<i class="fas fa-exchange-alt mx-2"></i>Singapore
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="destination" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img8.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Hong Kong<i class="fas fa-exchange-alt mx-2"></i>Tokyo
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$740</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="destination" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img9.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Hong Kong<i class="fas fa-exchange-alt mx-2"></i>Seoul
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$140</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="destination" value="MNL-Ninoy Aquino Intl,Manila,Philippines">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img4.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Hong Kong<i class="fas fa-exchange-alt mx-2"></i>Manila
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="destination" value="KEP-Nepalgunj Airport,Nepalgunj,Nepal">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img5.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Hong Kong<i class="fas fa-exchange-alt mx-2"></i>Nepal
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$100</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="destination" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img6.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Hong Kong<i class="fas fa-exchange-alt mx-2"></i>Beijing
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$640</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="seoul" role="tabpanel" aria-labelledby="seoul-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="destination" value="KEP-Nepalgunj Airport,Nepalgunj,Nepal">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Seoul<i class="fas fa-exchange-alt mx-2"></i>Nepal
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="destination" value="TSA-Sungshan,Taipei,Taiwan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img2.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Seoul<i class="fas fa-exchange-alt mx-2"></i>Taipei
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$740</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="destination" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img3.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Seoul<i class="fas fa-exchange-alt mx-2"></i>Beijing
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$140</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="destination" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img4.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Seoul<i class="fas fa-exchange-alt mx-2"></i>Tokyo
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="destination" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img5.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Seoul<i class="fas fa-exchange-alt mx-2"></i>Hong kong
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$100</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="SSN-Seoul Ab,Seoul East,South Korea">
                                        <input type="hidden" name="destination" value="DMK-Don Muang Intl,Bangkok,Thailand">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img6.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Seoul<i class="fas fa-exchange-alt mx-2"></i>Bangkok
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$640</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="tokyo" role="tabpanel" aria-labelledby="tokyo-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="destination" value="TSA-Sungshan,Taipei,Taiwan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img7.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Tokyo<i class="fas fa-exchange-alt mx-2"></i>Taipei
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="destination" value="TSA-Sungshan,Taipei,Taiwan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img8.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Tokyo<i class="fas fa-exchange-alt mx-2"></i>Taipei
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$740</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="destination" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img3.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Tokyo<i class="fas fa-exchange-alt mx-2"></i>Beijing
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$140</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="destination" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img4.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Tokyo<i class="fas fa-exchange-alt mx-2"></i>Tokyo
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="destination" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img5.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Tokyo<i class="fas fa-exchange-alt mx-2"></i>Hong kong
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$100</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="destination" value="HAN-Noibai Intl,Hanoi,Vietnam">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img6.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Tokyo<i class="fas fa-exchange-alt mx-2"></i>Hanoi
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$640</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="beijing" role="tabpanel" aria-labelledby="beijing-tab">
                            <div class="row">
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="destination" value="TSA-Sungshan,Taipei,Taiwan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Beijing<i class="fas fa-exchange-alt mx-2"></i>Taipei
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="destination" value="TSA-Sungshan,Taipei,Taiwan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img2.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Beijing<i class="fas fa-exchange-alt mx-2"></i>Taipei
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$740</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="destination" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img3.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Beijing<i class="fas fa-exchange-alt mx-2"></i>Beijing
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$140</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="destination" value="TYO-All Airports,Tokyo,Japan">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img4.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Beijing<i class="fas fa-exchange-alt mx-2"></i>Tokyo
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$340</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">
                                        @csrf
                                        <input type="hidden" name="origin" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="destination" value="HKG-Hong Kong Intl,Hong Kong,Hong Kong">

                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img5.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Beijing<i class="fas fa-exchange-alt mx-2"></i>Hong kong
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$100</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                                <div class="col-lg-4 responsive-column">
                                    <form method="POST" action="{{ route('flight_listing') }}">

                                        @csrf
                                        <input type="hidden" name="origin" value="BJS-All Airports,Beijing,China">
                                        <input type="hidden" name="destination" value="HAN-Noibai Intl,Hanoi,Vietnam">
                                        <input type="hidden" name="tripType" value="2">
                                        <input type="hidden" name="adult" value="1">
                                        <input type="hidden" name="child" value="0">
                                        <input type="hidden" name="infant" value="0">
                                        <input type="hidden" name="cabinClass" value="4">
                                        <input type="hidden" name="daterangedeal" value="{{date('Y-m-d',strtotime('+30 days'))}} - {{date('Y-m-d',strtotime('+37 days'))}}">
                                        
                                    <div class="deal-card">
                                        <div class="deal-title d-flex align-items-center">
                                            <img src="assets/img/airline-img6.png" alt="air-line-img">
                                            <h3 class="deal__title">
                                                <a href="#" class="d-flex align-items-center">
                                                    Beijing<i class="fas fa-exchange-alt mx-2"></i>Hanoi
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="deal__meta">{{ $tdate}}-{{ $trdate}}</p>
                                        <div
                                            class="deal-action-box d-flex align-items-center justify-content-between">
                                            <div class="price-box d-flex align-items-center"><span
                                                    class="price__from mr-1">From</span><span
                                                    class="price__num">$640</span></div>
                                            <button type="submit" class="btn-text">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- end deal-card -->
                                </div>
                                <!-- end col-lg-4 -->
                            </div>
                        </div>
                        <!-- end tab-pane -->
                    </div>
                    <!-- end tab-content -->
                    <div class="tab-content-info d-flex justify-content-between align-items-center">
                        <p class="font-size-15"><i class="fas fa-question-circle mr-1"></i>Average round-trip price
                            per person, taxes and fees included.</p>
                        <a href="#" class="btn-text font-size-15">Discover More </a>
                    </div>
                    <!-- end tab-content-info -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END ROUND-TRIP AREA -->
@include('hotelSection')
<!-- START Destination Area -->
<section class="destination-area section-padding" id="citys">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-7  align-items-center">
                <div class="section-heading">
                    <h2 class="sec__title">Our Suggested Destinations</h2>
                    <p class="sec__desc pt-3">From Editors Pick
                </div>
            </div>

            <div class="col-lg-4 col-5">
                <div class="btn-box text-right">
                    <a href="#citys" class="theme-btn mobile-discover-btn">Discover More</a>
                </div>
            </div>
        </div>

        <div class="row padding-top-40px">
            <div class="col-lg-4">
                <div class="card-item destination-card">
                    <div class="card-img">
                        <img src="assets/img/destination-img2.jpg" alt="destination-img">
                        <span class="badge">Miami</span>
                    </div>
                    <div class="card-body">
                        <div class="card-rating d-flex align-items-center">
                            <span class="ratings d-flex align-items-center mr-1 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating__text">(70694 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p class="tour__text">
                                50 Tours
                            </p>

                        </div>
                    </div>
                </div>

                <div class="card-item destination-card">
                    <div class="card-img">
                        <img src="assets/img/destination-img3.jpg" alt="destination-img">
                        <span class="badge">Los Angeles</span>
                    </div>
                    <div class="card-body">

                        <div class="card-rating d-flex align-items-center">
                            <span class="ratings d-flex align-items-center mr-1 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating__text">(70694 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p class="tour__text">
                                50 Tours
                            </p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="card-item destination-card">
                    <div class="card-img">
                        <img src="assets/img/destination-img4.jpg" alt="destination-img">
                        <span class="badge">Chicago</span>
                    </div>
                    <div class="card-body">

                        <div class="card-rating d-flex align-items-center">
                            <span class="ratings d-flex align-items-center mr-1 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating__text">(70694 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p class="tour__text">
                                150 Tours
                            </p>

                        </div>
                    </div>
                </div>

                <div class="card-item destination-card">
                    <div class="card-img">
                        <img src="assets/img/destination-img5.jpg" alt="destination-img">
                        <span class="badge">Huston</span>
                    </div>
                    <div class="card-body">

                        <div class="card-rating d-flex align-items-center">
                            <span class="ratings d-flex align-items-center mr-1 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating__text">(70694 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p class="tour__text">
                                50 Tours
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-item destination-card">
                    <div class="card-img">
                        <img src="assets/img/destination-img.jpg" alt="destination-img">
                        <span class="badge">United States</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="tour-details.php">Statue of Liberty National Monument</a>
                        </h3>
                        <div class="card-rating d-flex align-items-center">
                            <span class="ratings d-flex align-items-center mr-1 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating__text">(70694 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p class="tour__text">
                                50 Tours
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END DESTINATION AREA -->

<!-- START CAR AREA -->
<section class="car-area section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Book Now, Pay Later Cars</h2>
                </div>
            </div>
        </div>

        <div class="row padding-top-40px">
            <div class="col-lg-12">
                <div class="car-wrap">
                    <div class="car-carousel carousel-action">
                        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img src="assets/img/car-img.png" alt="car-img">
                                </a>
                                <span class="badge">Bestseller</span>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">Sedan</p>
                                <h3 class="card-title"><a href="#">Honda Civic or Similar</a></h3>
                                <div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>
                                <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Passenger"><i
                                                class="fas fa-users"></i><span>4</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Luggage"><i
                                                class="fas fa-suitcase"></i><span>1</span></li>
                                    </ul>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$23.00</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <button type="submit" class="btn-text">Book Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img src="assets/img/car-img2.png" alt="car-img">
                                </a>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">SUV</p>
                                <h3 class="card-title"><a href="#">Nissan or Similar</a></h3>
                                <div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>
                                <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Passenger"><i
                                                class="fas fa-users"></i><span>4</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Luggage"><i
                                                class="fas fa-suitcase"></i><span>1</span></li>
                                    </ul>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$33.00</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <button type="submit" class="btn-text">Book Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img src="assets/img/car-img3.png" alt="car-img">
                                </a>
                                <span class="badge">featured</span>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">SUV</p>
                                <h3 class="card-title"><a href="#">BMW X5 or Similar</a></h3>
                                <div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>
                                <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Passenger"><i
                                                class="fas fa-users"></i><span>4</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Luggage"><i
                                                class="fas fa-suitcase"></i><span>1</span></li>
                                    </ul>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$23.00</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <button type="submit" class="btn-text">Book Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img src="assets/img/car-img4.png" alt="car-img">
                                </a>
                                <span class="badge">Bestseller</span>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">SUV</p>
                                <h3 class="card-title"><a href="#">Volvo or Similar</a></h3>
                                <div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>
                                <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Passenger"><i
                                                class="fas fa-users"></i><span>6</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Luggage"><i
                                                class="fas fa-suitcase"></i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$45.00</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <button type="submit" class="btn-text">Book Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img src="assets/img/car-img5.png" alt="car-img">
                                </a>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">Sedan</p>
                                <h3 class="card-title"><a href="#">Toyota or Similar</a></h3>
                                <div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>
                                <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Passenger"><i
                                                class="fas fa-users"></i><span>5</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Luggage"><i
                                                class="fas fa-suitcase"></i><span>3</span></li>
                                    </ul>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$58.00</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <button type="submit" class="btn-text">Book Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="#" class="d-block">
                                    <img src="assets/img/car-img6.png" alt="car-img">
                                </a>
                                <span class="badge">featured</span>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">Mini</p>
                                <h3 class="card-title"><a href="#">Fiat Fiesta 2 Doors or Similar</a></h3>
                                <div class="card-rating">
                                    <span class="badge text-white">4.4/5</span>
                                    <span class="review__text">Average</span>
                                    <span class="rating__text">(30 Reviews)</span>
                                </div>
                                <div class="card-attributes">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Passenger"><i
                                                class="fas fa-users"></i><span>4</span></li>
                                        <li class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="top" title="Luggage"><i
                                                class="fas fa-suitcase"></i><span>1</span></li>
                                    </ul>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$23.00</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <button type="submit" class="btn-text">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection