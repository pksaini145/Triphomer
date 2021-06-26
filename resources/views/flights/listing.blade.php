@section('title','Flight Listings - Triphomer')
@extends('layouts.home')
@section('content')
<!-- END HEADER AREA -->
<style type="text/css">
    .returnflights{
        border-top: 1px dashed #333;
    padding-bottom: 15px;
    }
</style>

<script type="text/javascript">
    var flights = @json($resultdatao->FlightContracts);
</script>

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
                                        <a class="nav-link active as-listing-top-radio-box " id="one-way-tab"
                                            data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way"
                                            aria-selected="true">
                                            One way
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link as-listing-top-radio-box " id="round-trip-tab"
                                            data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip"
                                            aria-selected="false">
                                            Round-trip
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link as-listing-top-radio-box " id="multi-city-tab"
                                            data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city"
                                            aria-selected="false">
                                            Multi-city
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end section-tab -->
                            <div class="tab-content" id="myTas-ul-hover-navontent3">
                                <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                    aria-labelledby="one-way-tab">
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
                                                        <input type="text" class="as-custom-search form-control"
                                                            placeholder="Denver, CO (Den-Denver...">
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
                                                            placeholder="LOS Angles CA (LAX.....">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-3 col-12 as-mobile-calencder">
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
                                                                                <!-- <i class="fas fa-minus"></i> -->
                                                                            </div>
                                                                            <input type="text" name="adult_number"
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
                                                                            <input type="text" name="child_number"
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
                                                                            <input type="text" name="infants_number"
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
                                                <div class="col-lg-1 col-md-2 col-6">
                                                    <button type="button"
                                                        class="btn btn-block as-custom-btn-search">Search</button>
                                                </div>

                                                <div class="col-lg-2 col-md-4 col-6">
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

                                <div class="tab-pane fade " id="round-trip" role="tabpane1"
                                    aria-labelledby="round-trip-tab">
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
                                                            placeholder="Denver, CO (Den-Denver...">
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
                                                            placeholder="LOS Angles CA (LAX.....">
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
                                                                            <input type="text" name="adult_number"
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
                                                                            <input type="text" name="child_number"
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
                                                                            <input type="text" name="infants_number"
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
                                                    <button type="button"
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
                                                            placeholder="Denver, CO (Den-Denver...">
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
                                                            placeholder="LOS Angles CA (LAX.....">
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
                                                                            <input type="text" name="adult_number"
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
                                                                            <input type="text" name="child_number"
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
                                                                            <input type="text" name="infants_number"
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
                                                    <button type="button"
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
        </div>
        </div>
    </section>


    <!-- START HERO-WRAPPER AREA -->


    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="as-listing-signup-box">
                    <p>Get Most Updated Low Airfare <br><strong>Delhi – Dehra Dun</strong></p>
                    <div class="input-group">

                        <input type="text" id="txtEmail" class="form-control" autocomplete="off" autocompletetype="none"
                            placeholder="Enter email address">
                        <span class="input-group-btn"><button id="btnSubscribe" class="btn btn-success"
                                name="Sign Up">Sign Up</button></span>
                    </div>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="as-listing-signup-box">
                    <h3>Delhi to Dehra Dun <span>
                            Fri, Apr 09, 2021 - Fri, Apr 09, 2021 </span></h3>
                    <p>Prices are ROUNDTRIP per person, include all taxes and fees, but do not include baggage fees.</p>

                </div>

            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 viewed">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">Airline Coupne code</h3>
                            <div class="bbb_viewed_nav_container">
                                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                <div class="owl-item">
                                    <div
                                        class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="assets/img/air-logo.png" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price"><span>United Airlines</span></div>
                                            <div class="bbb_viewed_name"><a href="#">$160.80</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div
                                        class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="assets/img/air-logo.png" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price"><span>United Airlines</span></div>
                                            <div class="bbb_viewed_name"><a href="#">460.80</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div
                                        class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="assets/img/air-logo.png" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price"><span>United Airlines</span></div>
                                            <div class="bbb_viewed_name"><a href="#">$60.80</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div
                                        class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="assets/img/air-logo.png" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price"><span>United Airlines</span></div>
                                            <div class="bbb_viewed_name"><a href="#">$30.80</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div
                                        class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="assets/img/air-logo.png" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price"><span>United Airlines</span></div>
                                            <div class="bbb_viewed_name"><a href="#">$70.80</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div
                                        class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="assets/img/air-logo.png" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price"><span>United Airlines</span></div>
                                            <div class="bbb_viewed_name"><a href="#">$150.80</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-lg-12 col-md-12 as-main-listing-page">
                <div class="row">
                    <div class="col-lg-3 col-md-3 as-left-listing-box">
                        <div class="row">
                            <div class="col-lg-9 col-md-11 as-left-listing-heading">
                                <h3>Refine Your Search</h3>
                                <h5>Stops</h5>
                                <div class="checkbox">
                                    <input type="checkbox" class="custom-checkbox listing-filter" id="Check1" value="1">
                                    <label class="form-check-label" for="Check1">Non Stop</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="custom-checkbox listing-filter" id="Check1" value="2">
                                    <label class="form-check-label" for="Check1">One Stop</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="custom-checkbox listing-filter" id="Check1" value="3">
                                    <label class="form-check-label" for="Check1">Multi Stops</label>
                                </div>

                                <h5>Per Person Price</h5>
                                <div class="input-range">
                                    <span><strong id="per-person-min-price">USD $916.62</strong> - <span
                                            id="per-person-max-price">USD $7954.69</span></span>
                                </div>
                                 <div class="multi-range-container">
                                    <div class="multi-range">
                                        <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                            id="lower" >
                                        <span id="range-color" class="range-color"></span>
                                        <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                            id="upper" >
                                    </div>
                                </div>

                                <h5>Outbound Time/Duration</h5>
                                <h6 class="depart">
                                    <strong>Depart</strong> : FLL - Ft Lauderdale Hollywood Intl Arpt, Ft Lauderdale,
                                    Florida, United States
                                </h6>
                                <div class="input-range">
                                    <strong id="outbound-dept-min-time">Tue 03:30 AM </strong>- <span
                                        id="outbound-dept-max-time">Tue 11:00 PM</span>
                                </div>
                                <div class="multi-range-container">
                                    <div class="multi-range">
                                        <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                            id="lower1">
                                        <span id="range-color1" class="range-color"></span>
                                        <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                            id="upper1" >
                                    </div>

                                    
                                    <div class="row slider-labels">
                                        <div class="col-xs-6 caption">
                                          <span id="slider-range-value1"></span>
                                        </div>
                                        <div class="col-xs-6 text-right caption">
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form>
                                                <input type="hidden" name="min-value" value="">
                                                <input type="hidden" name="max-value" value="">
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <h6 class="arrive">
                                        <strong>Arrive </strong>: BOM - Chhatrapati Shivaji, Mumbai, India
                                    </h6>
                                    <div class="input-range">
                                        <strong id="outbound-arrive-min-time">Tue 12:35 AM </strong>- <span
                                            id="outbound-arrive-max-time">Tue 09:56 PM</span>
                                    </div>
                                    <div class="multi-range-container">
                                        <div class="multi-range">
                                            <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                                id="lower2">
                                            <span id="range-color2" class="range-color"></span>
                                            <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                                id="upper2">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <span class="duration"><strong>Flight Duration</strong></span>
                                    <div class="input-range">
                                        <strong id="outbound-flight-min-duration">20hrs 45mins </strong> - <span
                                            id="outbound-flight-max-duration">40hrs 15mins</span>
                                    </div>
                                    <div class="multi-range-container">
                                        <div class="multi-range">
                                            <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                                id="lower3">
                                            <span id="range-color3" class="range-color"></span>
                                            <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                                id="upper3">
                                        </div>
                                    </div>
                                </div>

                                <div class="inbound-duration">
                                    <h5>Inbound Time/Duration</h5>
                                    <h6 class="depart">
                                        <strong>Depart </strong>: BOM - Chhatrapati Shivaji, Mumbai, India
                                    </h6>
                                    <div class="input-range">
                                        <strong id="inbound-dept-min-time">Mon 02:45 AM </strong> - <span
                                            id="inbound-dept-max-time">Mon 09:15 PM</span>
                                    </div>
                                    <div class="multi-range-container">
                                        <div class="multi-range">
                                            <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                                id="lower4">
                                            <span id="range-color4" class="range-color"></span>
                                            <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                                id="upper4">
                                        </div>
                                    </div>
                                    <h6 class="arrive">
                                        <strong>Arrive </strong>: FLL - Ft Lauderdale Hollywood Intl Arpt, Ft
                                        Lauderdale, Florida, United States
                                    </h6>
                                    <div class="input-range">
                                        <strong id="inbound-arrive-min-time">Tue 05:55 AM</strong> - <span
                                            id="inbound-arrive-max-time">Tue 11:03 PM</span>
                                    </div>
                                    <div class="multi-range-container">
                                        <div class="multi-range">
                                            <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                                id="lower5">
                                            <span id="range-color5" class="range-color"></span>
                                            <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                                id="upper5">
                                        </div>
                                    </div>

                                    <span class="duration"><strong>Flight Duration</strong></span>
                                    <div class="input-range">
                                        <strong id="inbound-flight-min-duration">23hrs 59mins</strong> - <span
                                            id="inbound-flight-max-duration">34hrs 55mins</span>
                                    </div>
                                    <div class="multi-range-container">
                                        <div class="multi-range">
                                            <input class="range" type="range" min="0" max="10" value="0" step="0.1"
                                                id="lower6">
                                            <span id="range-color6" class="range-color"></span>
                                            <input class="range" type="range" min="0" max="10" value="10" step="0.1"
                                                id="upper6">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn as-reset-filter-btn btn-block">Reset All
                                    Filter</button>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-9 col-md-9 as-right-listing-box">


                        <div class="row as-flexible-dropdown">
                            <div class="col-lg-5 col-6 as-custom-dropdown-listing">
                                <select class="as-custom-select">
                                    <option>Flexible Date</option>
                                    <option>Flight 2</option>
                                    <option>Flight 3</option>
                                    <option>Flight 4</option>
                                    <option>Flight 5</option>

                                </select>
                                <p>Compare cheapest price for nearby days</p>
                            </div>


                            <div class="col-lg-5 col-6 as-custom-dropdown-listing">
                                <select class="as-custom-select">
                                    <option>Flexible Date</option>
                                    <option>Flight 2</option>
                                    <option>Flight 3</option>
                                    <option>Flight 4</option>
                                </select>
                                <p>Compare cheapest price for nearby days</p>
                            </div>
                        </div>
                        @foreach($resultdatao->FlightContracts as $flight_listing)

                                                    @php
                                                    $DepartureDate = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->DepartureDate;

                                                    $ArrivalDate = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->ArrivalDate;

                                                    $DepartureTime = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->DepartureTime;

                                                    $ArrivalTime = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->ArrivalTime;

                                                    $FlightDuration = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->FlightDuration;

                                                    

                                                    $AvailableSeats = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->AvailableSeats;
                                                    
                                                    $AirlineCode = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->MarketingCarrier->AirlineCode;

                                                    $AirlineName = $flight_listing->FlightSegmentDetails->OutBoundSegment[0]->MarketingCarrier->AirlineName;
                                                    @endphp
                        <div class="row">
                            <div class="col-lg-12 as-ticket-box">
                                <div class="row">
                                    @foreach($flight_listing->FlightSegmentDetails->OutBoundSegment as $flights)
                                    <div class="col-lg-12 col-md-12 col-12 as-ticket-under-box">
                                        <div class="row">
                                            <div class="col-lg-3 as-listing-img-box">
                                                <img src="https://skyhikes.com/ImageApp/AirlineLogo/{{$flights->MarketingCarrier->AirlineCode}}.png" alt="{{$flights->MarketingCarrier->AirlineName}}" width="60" height="35">
                                                <div class="as-ticket-img-heading">
                                                    <!-- <h6>{{$flight_listing->Provider}}</h6> -->
                                                    <h6>{{$flights->MarketingCarrier->AirlineName}}</h6>
                                                    <p>Economy</p>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <ul class="inner-seg">
                                                    <li>
                                                        <strong class="city">
                                                            {{$flights->Origin}}, </strong>
                                                            
                                                        <span class="city-name hidden-xs">
                                                           {{$flights->OriginCity}}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <time class="time">{{ date("g:i a", strtotime($flights->DepartureTime)) }} | </time>
                                                         <span
                                                            class="date hidden-xs">
                                                            {{ date('l',strtotime($flights->DepartureDate)) }}, {{date('F',strtotime($flights->DepartureDate))}} {{date('j',strtotime($flights->DepartureDate))}}, {{date('Y',strtotime($flights->DepartureDate))}}
                                                        </span>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <ul class="inner-seg">
                                                    <li>
                                                        <strong class="city">
                                                          {{$flights->Destination}}, 
                                                        </strong><span class="city-name hidden-xs">
                                                            {{$flights->DestinationCity}}
                                                        </span>
                                                    </li>
                                                    <li><time class="time">{{ date("g:i a", strtotime($flights->ArrivalTime)) }} | </time> <span
                                                            class="date hidden-xs"> {{ date('l',strtotime($flights->ArrivalDate)) }}, {{date('F',strtotime($flights->ArrivalDate))}} {{date('j',strtotime($flights->ArrivalDate))}}, {{date('Y',strtotime($flights->ArrivalDate))}}</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-4 text-right">
                                                <ul class="inner-seg">
                                                    <li class="nSpace text-right col-xs-6 col-sm-12">
                                                        @if($loop->index == 0)
                                                        {{$loop->count}} Stops
                                                        @endif

                                                    </li>
                                                    <!-- <span class="tech-stopage">ORD, ATL </span> -->
                                                    <li class="nSpace text-right col-xs-6 col-sm-12"><span
                                                            class="list-ico hidden-xs"></span><span
                                                            class="hidden-xs">Trip Time :</span> {{$flights->FlightDuration}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @if($flight_listing->FlightSegmentDetails->InBoundSegment)
                                    <div class="returnflights">
                                     @foreach($flight_listing->FlightSegmentDetails->InBoundSegment as $flightsr)
                                    <div class="col-lg-12 col-md-12 col-12 as-ticket-under-box">
                                        <div class="row">
                                            <div class="col-lg-3 as-listing-img-box">
                                                <img src="https://skyhikes.com/ImageApp/AirlineLogo/{{$flightsr->MarketingCarrier->AirlineCode}}.png" alt="{{$flightsr->MarketingCarrier->AirlineName}}" width="60" height="35">
                                                <div class="as-ticket-img-heading">
                                                    <!-- <h6>{{$flight_listing->Provider}}</h6> -->
                                                    <h6>{{$flightsr->MarketingCarrier->AirlineName}}</h6>
                                                    <p>Economy</p>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <ul class="inner-seg">
                                                    <li>
                                                        <strong class="city">
                                                            {{$flightsr->Origin}}, </strong>
                                                            
                                                        <span class="city-name hidden-xs">
                                                           {{$flightsr->OriginCity}}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <time class="time">{{ date("g:i a", strtotime($flightsr->DepartureTime)) }} | </time>
                                                         <span
                                                            class="date hidden-xs">
                                                            {{ date('l',strtotime($flightsr->DepartureDate)) }}, {{date('F',strtotime($flightsr->DepartureDate))}} {{date('j',strtotime($flightsr->DepartureDate))}}, {{date('Y',strtotime($flightsr->DepartureDate))}}
                                                        </span>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <ul class="inner-seg">
                                                    <li>
                                                        <strong class="city">
                                                          {{$flightsr->Destination}}, 
                                                        </strong><span class="city-name hidden-xs">
                                                            {{$flightsr->DestinationCity}}
                                                        </span>
                                                    </li>
                                                    <li><time class="time">{{ date("g:i a", strtotime($flightsr->ArrivalTime)) }} | </time> <span
                                                            class="date hidden-xs"> {{ date('l',strtotime($flightsr->ArrivalDate)) }}, {{date('F',strtotime($flightsr->ArrivalDate))}} {{date('j',strtotime($flightsr->ArrivalDate))}}, {{date('Y',strtotime($flightsr->ArrivalDate))}}</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-4 text-right">
                                                <ul class="inner-seg">
                                                    <li class="nSpace text-right col-xs-6 col-sm-12">
                                                        @if($loop->index == 0)
                                                        {{$loop->count}} Stops
                                                        @endif

                                                    </li>
                                                    <!-- <span class="tech-stopage">ORD, ATL </span> -->
                                                    <li class="nSpace text-right col-xs-6 col-sm-12"><span
                                                            class="list-ico hidden-xs"></span><span
                                                            class="hidden-xs">Trip Time :</span> {{$flightsr->FlightDuration}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                 </div>
                                    @endif

                                    <div class="col-lg-12 as-ticket-book-box">
                                        <div class="col-lg-12 select-trip"></div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-4 col-6 itinerary-details">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle as-custom-itinerart-button"
                                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Itinerary Details
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-4 col-6 cancellation-text">
                                                <i class="fa fa-check" aria-hidden="true"></i> <span
                                                    class="free-cancellation"> Free Cancellation </span>
                                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                            </div>

                                            <div class="col-lg-5 as-airline-booking-detail">
                                                <li class="airline-breakup col-lg-7">
                                                    <h4><span class="total-price">${{$flight_listing->AdultFare->TotalFareV2}}</span></h4>
                                                    <small>Price Per Person (Incl fee)</small>
                                                </li>
                                                <li class="book-now-only">Book Now only <strong class="seats">{{$AvailableSeats}} seats
                                                    </strong> left at the price!</li>
                                            </div>


                                            <div class="col-lg-2 listing-book-now-btn">
                                                <a href="{{ route('flight_payment',['id'=>$flight_listing->ContractID, 'CacheKey'=>$resultdatao->CacheKey]) }}"> <button type="button" class="btn btn-block ">Book Now</button></a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                       
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- END HERO-WRAPPER AREA -->
    
@endsection