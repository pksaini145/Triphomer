@section('title','Flight Listings - Triphomer')
@extends('layouts.home')
@section('content')
<style type="text/css">
	.as-booking-city.listingcustm{
    top: 35px;
}
</style>
<section class="as-listing-top-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 responsive--column-l">


                    <!-- end section-tab -->
                    <div class="tab-content " id="myTas-ul-hover-navontent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            <div class="section-tab section-tab-2 mobile-tab pb-1">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active as-listing-top-radio-box as-only-listing-label" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                                            One way
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link as-listing-top-radio-box as-only-listing-label" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                                            Round-trip
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link as-listing-top-radio-box as-only-listing-label" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                                            Multi-city
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end section-tab -->
                             <div class="tab-content" id="myTas-ul-hover-navontent3">
                                <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                    aria-labelledby="one-way-tab">
                                    <form method="POST" action="{{ route('flight_listing')}}">
                                        @if($errors->any())
                                            @foreach($errors->all() as $error)
                                            <div class="error">{{$error}}</div><br>
                                            @endforeach
                                            @endif
                                        @csrf
                                        <input type="hidden" name="tripType" value="1">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12 as-listing-search-feild">
                                            <div class="row as-listing-search-row">
                                                <div class="col-lg-2 col-md-6 as-listing-search-box">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-plane-departure"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" id="originCode" name="origin" class="as-custom-search form-control"
                                                        value=" {{$searchdata['origin']}}" 
                                                            >
                                                            <ul class="as-booking-city listingcustm originCodesreach as-booking-city listingcustm" style="display:none;">
                                                                                                                      
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="as-exchange-icon ">
                                                    <span><i class="fa fa-exchange-alt" aria-hidden="true"></i></span>
                                                </div>

                                                <div class="col-lg-2 col-md-5 as-left-listing-morning-search-box">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-plane-arrival"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" id="destCode" name="destination" class="as-custom-search form-control" value="{{$searchdata['destination']}}"
                                                            >
                                                            <ul class="as-booking-city listingcustm destiCodesreach as-booking-city listingcustm" style="display:none;">
                                                                                                                      
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3 col-12 as-mobile-calencder">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-calendar"></i>
                                                            </span>

                                                        </div>
                                                        <!-- <input type="text"
                                                            class="date-range form-control as-custom-date-input"
                                                            name="daterange-single" placeholder="Departing"
                                                            value=""
                                                            > -->
                                                            <input class="date-range form-control as-custom-date-input" type="text" name="daterangesingle"> 
                                                    </div>
                                                </div>


                                                <div class="col-lg-2 col-md-3 col-12 as-mobile-calencder">
                                                    <div class="form-group" style="margin-bottom:0px">
                                                        <div class="dropdown dropdown-contain gty-container ">
                                                            <a class="dropdown-toggle dropdown-btn as-dropdown" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="adult" data-text="Adult"
                                                                    data-text-multi="Adults">0 Adult</span> -
                                                                <span class="children" data-text="Child"
                                                                    data-text-multi="Children">0 Children</span>
                                                                <svg class="svg-inline--fa fa-angle-down fa-w-10 as-angle-down"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fa" data-icon="angle-down" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 320 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                                    </path>
                                                                </svg>
                                                                <!-- <i class="fa fa-angle-down as-angle-down"></i> -->
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                
                                                                            </div>
                                                                            <input type="text" name="adult"
                                                                                value=" {{$searchdata['adult']}}">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                
                                                                            </div>
                                                                            <input type="text" name="child"
                                                                                value=" {{$searchdata['child']}}">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="infant"
                                                                                value=" {{$searchdata['infant']}}" class="qty-input">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end dropdown -->
                                                    </div>

                                                </div>
                                                <div class="col-lg-1 col-md-2 col-5">
                                                    <button type="submit"
                                                        class="btn btn-block as-custom-btn-search">Search</button>
                                                </div>

                                                <div class="col-lg-2 col-md-4 col-7 as-advance-mobile-btn">
                                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-13 as-listing-advance"
                                                        data-toggle="collapse" href="#collapseSix" role="button"
                                                        aria-expanded="true" aria-controls="collapseSix">
                                                        Advanced search <svg
                                                            class="svg-inline--fa fa-angle-down fa-w-10 ml-1"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="angle-down" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-angle-down ml-1"></i> -->
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade " id="round-trip" role="tabpane1"
                                    aria-labelledby="round-trip-tab">
                                     <form method="POST" action="{{ route('flight_listing')}}">
                                        @if($errors->any())
                                            @foreach($errors->all() as $error)
                                            <div class="error">{{$error}}</div><br>
                                            @endforeach
                                            @endif
                                        @csrf
                                        <input type="hidden" name="tripType" value="2">
                                    <div class="row">
                                        <div class="col-lg-12 as-listing-search-feild">
                                            <div class="row as-listing-search-row">
                                                <div class="col-lg-2 col-md-6 as-listing-search-box">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-plane-departure"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" name="origin" class="as-custom-search form-control"
                                                            value=" {{$searchdata['origin']}}">
                                                    </div>
                                                </div>
                                                <div class="as-exchange-icon ">
                                                    <span><i class="fa fa-exchange-alt" aria-hidden="true"></i></span>
                                                </div>

                                                <div class="col-lg-2 col-md-5 as-left-listing-morning-search-box">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-plane-arrival"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" name="destination" class="as-custom-search form-control"
                                                            value="{{$searchdata['destination']}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3">
                                                    <div class="form-group">
                                                        <svg class="svg-inline--fa fa-calendar fa-w-14 form-icon as-custom-icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg><!-- <span class="fa fa-calendar form-icon as-custom-icon"></span> -->
                                                        <input class="date-range form-control" type="text" name="daterange" id="example1" readonly="">
                                                    </div>
                                                </div>


                                                <div class="col-lg-2 col-md-3">
                                                    <div class="form-group" style="margin-bottom:0px">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="adult" data-text="Adult"
                                                                    data-text-multi="Adults">0 Adult</span> -
                                                                <span class="children" data-text="Child"
                                                                    data-text-multi="Children">0 Children</span>
                                                                <svg class="svg-inline--fa fa-angle-down fa-w-10 as-angle-down"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fa" data-icon="angle-down" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 320 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                                    </path>
                                                                </svg>
                                                                <!-- <i class="fa fa-angle-down as-angle-down"></i> -->
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="adult"
                                                                                value="0">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="child"
                                                                                value="0">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="infants"
                                                                                value="0" class="qty-input">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end dropdown -->
                                                    </div>

                                                </div>
                                                <div class="col-lg-1 col-md-2">
                                                    <button type="submit"
                                                        class="btn btn-block as-custom-btn-search">Search</button>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-13 as-listing-advance"
                                                        data-toggle="collapse" href="#collapseSix" role="button"
                                                        aria-expanded="true" aria-controls="collapseSix">
                                                        Advanced search <svg
                                                            class="svg-inline--fa fa-angle-down fa-w-10 ml-1"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="angle-down" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-angle-down ml-1"></i> -->
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>

                                <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpane1"
                                    aria-labelledby="multi-city-tab">
                                    <div class="row">
                                        <div class="col-lg-12 as-listing-search-feild">
                                            <div class="row as-listing-search-row">
                                                <div class="col-lg-2 col-md-6 as-listing-search-box">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-plane-departure"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" class="as-custom-search form-control"
                                                            value={{$searchdata['origin']}}">
                                                    </div>
                                                </div>
                                                <div class="as-exchange-icon ">
                                                    <span><i class="fa fa-exchange-alt" aria-hidden="true"></i></span>
                                                </div>

                                                <div class="col-lg-2 col-md-5 as-left-listing-morning-search-box">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-plane-arrival"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" class="as-custom-search form-control"
                                                            value="{{$searchdata['destination']}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text as-custom-input-group-text"
                                                                id="basic-addon1"> <i class="fa fa-calendar"></i>
                                                            </span>

                                                        </div>
                                                        <input type="text"
                                                            class="date-range form-control as-custom-date-input"
                                                            name="daterange-single" placeholder="Departing">
                                                    </div>
                                                </div>


                                                <div class="col-lg-2 col-md-3">
                                                    <div class="form-group" style="margin-bottom:0px">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="adult" data-text="Adult"
                                                                    data-text-multi="Adults">0 Adult</span> -
                                                                <span class="children" data-text="Child"
                                                                    data-text-multi="Children">0 Children</span>
                                                                <svg class="svg-inline--fa fa-angle-down fa-w-10 as-angle-down"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fa" data-icon="angle-down" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 320 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                                    </path>
                                                                </svg>
                                                                <!-- <i class="fa fa-angle-down as-angle-down"></i> -->
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="adult"
                                                                                value="0">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="child"
                                                                                value="0">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="dropdown-item as-listing-passenger-dropdown">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><svg
                                                                                    class="svg-inline--fa fa-minus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="infants"
                                                                                value="0" class="qty-input">
                                                                            <div class="qtyInc"><svg
                                                                                    class="svg-inline--fa fa-plus fa-w-14"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="plus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                                                    </path>
                                                                                </svg>
                                                                                <!-- <i class="fas fa-plus"></i> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end dropdown -->
                                                    </div>

                                                </div>
                                                <div class="col-lg-1 col-md-2">
                                                    <button type="submit"
                                                        class="btn btn-block as-custom-btn-search">Search</button>
                                                </div>
                                                <div class="col-lg-2 col-md-3">
                                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-13 as-listing-advance"
                                                        data-toggle="collapse" href="#collapseSix" role="button"
                                                        aria-expanded="true" aria-controls="collapseSix">
                                                        Advanced search <svg
                                                            class="svg-inline--fa fa-angle-down fa-w-10 ml-1"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="angle-down" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-angle-down ml-1"></i> -->
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab-pane -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="row advanced-wrap">
                <div class="col-lg-12 collapse" id="collapseSix">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="input-box">
                                <div class="form-group">
                                    <div class="select-contain w-auto">
                                        <select class="trip-value as-trip-no-preference">
                                            <option value="1">Economy Coach</option>
                                            <option value="2">Business</option>
                                            <option value="3">First</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="input-box">

                                <div class="form-group">
                                    <div class="select-contain w-auto">
                                        <select class="trip-value as-trip-no-preference">
                                            <option value="">No preference</option>
                                            <option value="AC">ACE Rent A Car</option>
                                            <option value="AD">Advantage Rent-A-Car</option>
                                            <option value="AL">Alamo Rent A Car</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <div class="input-box">

                                <span class="as-stop-checkbox"> <input type="checkbox" name="checkbox"> Non stop
                                    flights</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </section>


    <!-- START HERO-WRAPPER AREA -->
<style>
    .no-result {
    width: 73%;
    margin: 30px auto;
}

.warning {
    background: #fcf8e3;
    border: solid 1px #e8deab;
    margin: 0;
    padding: 0;
    font-size: 1.2em;
    padding: 1% 2%;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    font-family: 'Lato', sans-serif !important;
    color: #f10c0c !important;
}

.warning i.fa-exclamation-triangle {
    color: #f10c0c !important;
}

.warning-text {
    margin-bottom: 50px;
    border: solid 1px #ddd;
    border-top: none;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    padding: 2%;
    font-size: 1.1em;
    font-family: 'Lato', sans-serif !important;
    padding-left: 8.5%;
}

.warning-text ul {
    list-style-type: none;
    padding-left: 0;
    outline: none;
}

.warning-text ul li:first-child {
    margin-top: 15px;
}

.warning-text ul li {
    font-size: 0.8em;
    line-height: 40px;
    display: block;
    font-weight: normal;
}

@media only screen and (max-width:576px){
    .no-result {
    width: 100%;
    padding: 15px;
    margin:0px;
}
}
</style>
 @php
            $ori = explode('-',$searchdata['origin']);
            $oriar = explode(',',$ori[1]);
            $dest = explode('-',$searchdata['destination']);
            $destar = explode(',',$dest[1]);
            if($searchdata['tripType'] == 2){
                     if (isset($searchdata['daterange'])) {
                 $dater = $searchdata['daterange'];   
                }else{
                  $dater = $searchdata['daterangedeal'];  
                }
                $datea = explode(' - ',$dater);
                $departureDate = $datea[0];
                $departureDatestr = strtotime($departureDate);
                $return_date = $datea[1];
                $return_datestr = strtotime($return_date);

            }else{
              $origindate = $searchdata['daterangesingle']; 
              $oridatestr = strtotime($origindate);
              
            }
            
            
            @endphp
            
                

            
        

<div class="no-result pad-right-non ie-right-side warning-top">
<div class="as-listing-signup-box">
                    <h3>{{$oriar[1]}} to {{$destar[1]}} <span>
                        @if($searchdata['tripType'] == 2)
                        {{ date('D, M d', $departureDatestr )}}-{{date('D, M d', $return_datestr)}}
                        @else
                        {{date('D, M d', $oridatestr)}}
                        @endif

                             </span></h3>
                    <p>Prices are ROUNDTRIP per person, include all taxes and fees, but do not include baggage fees.</p>

                </div>
        <div class="warning">
            <center><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  We could not find flights as per your request, please update your search criteria and re-start the search.</center>
        </div>
        <div class="warning-text">
            <strong>You can choose from following options</strong>
            <ul>
                <li>1. Confirm the search criteria you have entered, and try again</li>
                <li>2. Enter new search details</li>
                <li>
                    3. For further assistance, call us toll free at<b>
855-845-4400
                    </b>
                </li>
            </ul>
            <div>
                Thank you for choosing triphomer.com
            </div>
        </div>
    </div>

@endsection