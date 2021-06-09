@section('title','Hotel Listings - Triphomer')
@extends('layouts.home')
@section('content')
<!-- Searchng Box start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 as-listing-search-feild as-hotel-listing-search-field">
                <div class="row as-listing-search-row">
                    <div class="col-lg-3">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text as-custom-input-group-text" id="basic-addon1"> <svg
                                        class="svg-inline--fa fa-plane-departure fa-w-20" aria-hidden="true"
                                        focusable="false" data-prefix="fa" data-icon="plane-departure" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M624 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h608c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM80.55 341.27c6.28 6.84 15.1 10.72 24.33 10.71l130.54-.18a65.62 65.62 0 0 0 29.64-7.12l290.96-147.65c26.74-13.57 50.71-32.94 67.02-58.31 18.31-28.48 20.3-49.09 13.07-63.65-7.21-14.57-24.74-25.27-58.25-27.45-29.85-1.94-59.54 5.92-86.28 19.48l-98.51 49.99-218.7-82.06a17.799 17.799 0 0 0-18-1.11L90.62 67.29c-10.67 5.41-13.25 19.65-5.17 28.53l156.22 98.1-103.21 52.38-72.35-36.47a17.804 17.804 0 0 0-16.07.02L9.91 230.22c-10.44 5.3-13.19 19.12-5.57 28.08l76.21 82.97z">
                                        </path>
                                    </svg><!-- <i class="fa fa-plane-departure" aria-hidden="true"></i> --></span>
                            </div>
                            <input type="text" class="as-custom-search form-control"
                                placeholder="Denver, CO (Den-Denver...">
                        </div>
                    </div>


                    <div class="col-lg-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text as-custom-input-group-text" id="basic-addon1"> <svg
                                        class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" focusable="false"
                                        data-prefix="fa" data-icon="calendar" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z">
                                        </path>
                                    </svg><!-- <i class="fa fa-calendar"></i> -->
                                </span>

                            </div>
                            <input type="text" class="date-range form-control as-custom-date-input"
                                name="daterange-single" placeholder="Departing">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text as-custom-input-group-text" id="basic-addon1"> <svg
                                        class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" focusable="false"
                                        data-prefix="fa" data-icon="calendar" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z">
                                        </path>
                                    </svg><!-- <i class="fa fa-calendar"></i> -->
                                </span>

                            </div>
                            <input type="text" class="date-range form-control as-custom-date-input"
                                name="daterange-single" placeholder="Departing">
                        </div>
                    </div>


                    <div class="col-lg-2">
                        <div class="form-group" style="margin-bottom:0px">
                            <div class="dropdown dropdown-contain gty-container ">
                                <a class="dropdown-toggle dropdown-btn as-dropdown" href="#" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span> -
                                    <span class="children" data-text="Child" data-text-multi="Children">0 Child</span>
                                    <svg class="svg-inline--fa fa-angle-down fa-w-10 as-angle-down" aria-hidden="true"
                                        focusable="false" data-prefix="fa" data-icon="angle-down" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fa fa-angle-down as-angle-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item as-listing-passenger-dropdown">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Adults</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <div class="qtyDec"><svg class="svg-inline--fa fa-minus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-minus"></i> -->
                                                </div>
                                                <input type="text" name="adult_number" value="0">
                                                <div class="qtyInc"><svg class="svg-inline--fa fa-plus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-plus"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item as-listing-passenger-dropdown">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Children</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <div class="qtyDec"><svg class="svg-inline--fa fa-minus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-minus"></i> -->
                                                </div>
                                                <input type="text" name="child_number" value="0">
                                                <div class="qtyInc"><svg class="svg-inline--fa fa-plus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-plus"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item as-listing-passenger-dropdown">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Infants</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <div class="qtyDec"><svg class="svg-inline--fa fa-minus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-minus"></i> -->
                                                </div>
                                                <input type="text" name="infants_number" value="0" class="qty-input">
                                                <div class="qtyInc"><svg class="svg-inline--fa fa-plus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
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
                    <div class="col-lg-1">
                        <button type="button" class="btn btn-block as-custom-btn-search">Search</button>
                    </div>


                </div>
            </div>

        </div>
        <div class="row">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb as-custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Triphomer</a></li>
                    <li class="breadcrumb-item"><a href="#">Flights</a></li>
                    <li class="breadcrumb-item"><a href="index.html">North America</a></li>
                    <li class="breadcrumb-item"><a href="#">USA</a></li>
                    <li class="breadcrumb-item"><a href="#">Nevada</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Las Vegas (LAS)</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-12 as-sidebar-filter">
                <h3>Filter by:</h3>
                <div class="as-sidebar">

                    <div class="as-sidebar-budget-filter">
                        <h4>Your Budget (Per Night)</h4>
                        <div class="multi-range-container">
                            <div class="multi-range">
                                <input class="range" type="range" min="0" max="10" value="0" step="0.1" id="lower">
                                <span id="range-color" class="range-color"></span>
                                <input class="range" type="range" min="0" max="10" value="10" step="0.1" id="upper">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Popular Filters</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">4 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>103</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Good 7+
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>177</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Time Square
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>55</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Breakfast
                                                Included
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>83</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Prepayment
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>124</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Free WiFi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>145</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Manhattan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>213</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Central Park
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>46</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Health & Safity</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">4 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>103</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Star Rating</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">1 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>108</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">2 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>43</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">3 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>56</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">4 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>63</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">5 Stars
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>113</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Unrated
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>144</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Distance from center of New York</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Less than 1 km
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Less than 3 km
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Less than 5 km
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>24</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Deals</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">All Deals
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>120</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>24 Hours Front</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Front CDesk
                                                Open 24/7
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>120</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Reservation policy</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Free
                                                Cancellation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>10</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">No Prepayment
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Meals</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Kitchen Faciliites
                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>10</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Breakfast Included 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Property Type</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Hotels
                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>10</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Apartments
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Hostels
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>22</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Guesthouse
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>32</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Homestays
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>20</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Landmarks</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Times Square
                                               
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>30</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Empire State Building
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>6</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Top of the Rock
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>22</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Central Park
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>52</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Bridge
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>20</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                

                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-12">
                <div class="as-rightbox-header-title">
                    <h3>
                        Denver: 143 properties found
                    </h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="as-rightside-top-bar">
                            <ul>
                                <li><a href="#" active>Our Top Picks</a></li>
                                <li><a href="#">Entire homes & apartments</a></li>
                                <li><a href="#">Price (lowest first)</a></li>
                                <li><a href="#">Review Score & Price</a></li>
                                <li><a href="#">Stars (highest first)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 as-right-main-box">
                        <div class="row">
                            <div class="col-lg-3 as-rightside-img-box">
                                <img src="assets/img/img1.jpg" alt="img1" class="img-fluid">
                            </div>
                            <div class="col-lg-6 as-right-box-content">
                                <span> <a href="#">
                                        <h3>Trump International New York</h3>
                                    </a> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i></span>
                                <span class="as-city-link">
                                    <a href="#">New York</a>
                                    <a href="#">Show on Map</a>
                                    <p>150 km from center</p>
                                </span>

                                <div class="as-last-booked">
                                    Last booked for your dates 4 hours ago
                                </div>
                                <div class="as-suprior-heading">
                                    <h3>Suprior Queen Room</h3>
                                </div>

                                <small>1 Queen bed</small><br>
                                <span class="as-room-left">Only 4 room left at this price our sit.</span>
                            </div>
                            <div class="col-lg-3 as-right-box-review">
                                <div class="row">
                                    <div class="col-lg-8" style="padding-right:0px">
                                        <div class="bui-review-score">
                                            <a href="#">
                                                <p class="bui-review-score__title">
                                                    Review score
                                                </p>
                                                <p class="bui-review-score__text"> 876 reviews </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding-left:8px">
                                        <span class="bui-review-score__badge" aria-label="Scored 6.6 "> 6.6 </span>
                                    </div>
                                </div>

                                <br>
                                <div class="col-lg-12 as-time-adults">
                                    <span>4 weeks 2 Adults</span>
                                    <p>$2012.50</p>
                                    <div class="as-taxes-and-fees-under-price">
                                        ₹&nbsp;1,319 taxes and charges
                                    </div>

                                    <a href="{{ route('hotel_payment') }}"> <button type="button" class="as-hotel-listing-btn">Book
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Searchng Box end --> 
@endsection