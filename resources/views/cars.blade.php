@section('title','Car Listing - Triphomer')
@extends('layouts.home')
@section('content')
<!-- Car Searching box Start -->

<section style="background-color: #0C0C68; ">
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
                                        class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true"
                                        focusable="false" data-prefix="fa" data-icon="calendar" role="img"
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
                                        class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true"
                                        focusable="false" data-prefix="fa" data-icon="calendar" role="img"
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
                                    <span class="children" data-text="Child" data-text-multi="Children">0
                                        Child</span>
                                    <svg class="svg-inline--fa fa-angle-down fa-w-10 as-angle-down"
                                        aria-hidden="true" focusable="false" data-prefix="fa" data-icon="angle-down"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        data-fa-i2svg="">
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
                                                        data-icon="minus" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-minus"></i> -->
                                                </div>
                                                <input type="text" name="adult_number" value="0">
                                                <div class="qtyInc"><svg class="svg-inline--fa fa-plus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
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
                                    <div class="dropdown-item as-listing-passenger-dropdown">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Children</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <div class="qtyDec"><svg class="svg-inline--fa fa-minus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-minus"></i> -->
                                                </div>
                                                <input type="text" name="child_number" value="0">
                                                <div class="qtyInc"><svg class="svg-inline--fa fa-plus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
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
                                    <div class="dropdown-item as-listing-passenger-dropdown">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Infants</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <div class="qtyDec"><svg class="svg-inline--fa fa-minus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <i class="fas fa-minus"></i> -->
                                                </div>
                                                <input type="text" name="infants_number" value="0"
                                                    class="qty-input">
                                                <div class="qtyInc"><svg class="svg-inline--fa fa-plus fa-w-14"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
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
                    <div class="col-lg-1">
                        <button type="button" class="btn btn-block as-custom-btn-search">Search</button>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>
<!-- Car Searching box end -->
<!-- Car Searching box end -->
<section style="background-color: #EFEFEF; padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="as-book-cheap-heading">67 Car available in Las Vegas <b>-LAS Mccarran intl Las Vegas
                        Nevada
                        Unted State</b> </h3>
                <h3 class="as-book-cheap-heading"><b>Book wth Confidence Book Today Triphomer </b> Best price
                    Guarantee!
                </h3>
            </div>
        </div>
    </div>


    <!-- Car listing slider start  -->

    <!-- Car listing slider end -->
    <!--Car Container Box start -->
    <div class="container">


        <div class="row">
            <div class="col-lg-3 col-md-3 col-12 as-sidebar-filter">
                <h3>Refine Your Search</h3>
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
                        <h4>Car Class</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Economy
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Compact
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>17</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    value="">Intermediate
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Standard

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Fulsize
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Mini
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>14</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Luxary
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>21</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-9 col-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Premium
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>16</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="as-sidebar-facilities-box">
                        <h4>Car Type</h4>
                        <div class="row">
                            <div class="col-lg-12 as-sidebar-content">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">All Car
                                                Class
                                            </label>
                                        </div>
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
                                                <input type="checkbox" class="form-check-input" value="">2/4 Door
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
                                                <input type="checkbox" class="form-check-input" value="">Suv
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
                                                <input type="checkbox" class="form-check-input" value="">Passenger
                                                Van
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>14</span>
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
                                                <input type="checkbox" class="form-check-input" value="">Pick up
                                                Regular
                                                Cab
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>11</span>
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
                                                <input type="checkbox" class="form-check-input" value="">Sport
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>18</span>
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
                                                <input type="checkbox" class="form-check-input" value="">Crossover
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>8</span>
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
                                                <input type="checkbox" class="form-check-input" value="">Luxary
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
                                                <input type="checkbox" class="form-check-input" value="">Premium
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <span>18</span>
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
                        Showing 6 Car Results
                    </h3>
                </div>

                <div class="row">
                   
                    <div class="col-lg-5  as-car-equal-box">
                        <div class="as-car-box">
                            <img src="assets/img/car-img.png" alt="car1" class="img-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="as-car-box-sub-category">
                                        <li><i class="fa fa-user"></i> 4</li>
                                        <li class="doorsinfo"><i class="fa fa-suitcase"></i> 5</li>
                                        <li><i class="fa fa-accusoft"></i> Ac</li>
                                    </ul>

                                    <ul class="as-car-box-manual">
                                        <li><i class="fa fa-check"></i> Manual Transmission</li>
                                        <li><i class="fa fa-check"></i> Air Conditioning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7  as-car-equal-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="as-car-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h3>Nissan Versa Or Similar</h3>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <p> <b>Free Cancellation</b> </p>

                                            </div>
                                        </div>
                                    </div>

                                    <p>Class : Compact Pricelne</p>
                                    <p class="as-car-features"> Car Features</p>
                                    <p><i class="fa fa-check"></i> Air Conditioning</p>
                                    <p><i class="fa fa-check"></i> Seating 5 People</p>
                                    <p><i class="fa fa-check"></i> Cargo 2 Suitcases</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="as-alamo"> Provided By: <b>Alamo</b></p>

                                            <p>Alamo Rent a Car</p>
                                            <p>Volkswagen Jetta, Hyundai Sonata or similar </p>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <span>$166.66</span>
                                                <p>Price Per day</p>
                                                <button type="button">Book Now</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-lg-5  as-car-equal-box">
                        <div class="as-car-box">
                            <img src="assets/img/car-img.png" alt="car1" class="img-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="as-car-box-sub-category">
                                        <li><i class="fa fa-user"></i> 4</li>
                                        <li class="doorsinfo"><i class="fa fa-suitcase"></i> 5</li>
                                        <li><i class="fa fa-accusoft"></i> Ac</li>
                                    </ul>

                                    <ul class="as-car-box-manual">
                                        <li><i class="fa fa-check"></i> Manual Transmission</li>
                                        <li><i class="fa fa-check"></i> Air Conditioning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7  as-car-equal-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="as-car-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h3>Nissan Versa Or Similar</h3>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <p> <b>Free Cancellation</b> </p>

                                            </div>
                                        </div>
                                    </div>

                                    <p>Class : Compact Pricelne</p>
                                    <p class="as-car-features"> Car Features</p>
                                    <p><i class="fa fa-check"></i> Air Conditioning</p>
                                    <p><i class="fa fa-check"></i> Seating 5 People</p>
                                    <p><i class="fa fa-check"></i> Cargo 2 Suitcases</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="as-alamo"> Provided By: <b>Alamo</b></p>

                                            <p>Alamo Rent a Car</p>
                                            <p>Volkswagen Jetta, Hyundai Sonata or similar </p>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <span>$166.66</span>
                                                <p>Price Per day</p>
                                                <button type="button">Book Now</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-lg-5  as-car-equal-box">
                        <div class="as-car-box">
                            <img src="assets/img/car-img.png" alt="car1" class="img-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="as-car-box-sub-category">
                                        <li><i class="fa fa-user"></i> 4</li>
                                        <li class="doorsinfo"><i class="fa fa-suitcase"></i> 5</li>
                                        <li><i class="fa fa-accusoft"></i> Ac</li>
                                    </ul>

                                    <ul class="as-car-box-manual">
                                        <li><i class="fa fa-check"></i> Manual Transmission</li>
                                        <li><i class="fa fa-check"></i> Air Conditioning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7  as-car-equal-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="as-car-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h3>Nissan Versa Or Similar</h3>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <p> <b>Free Cancellation</b> </p>

                                            </div>
                                        </div>
                                    </div>

                                    <p>Class : Compact Pricelne</p>
                                    <p class="as-car-features"> Car Features</p>
                                    <p><i class="fa fa-check"></i> Air Conditioning</p>
                                    <p><i class="fa fa-check"></i> Seating 5 People</p>
                                    <p><i class="fa fa-check"></i> Cargo 2 Suitcases</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="as-alamo"> Provided By: <b>Alamo</b></p>

                                            <p>Alamo Rent a Car</p>
                                            <p>Volkswagen Jetta, Hyundai Sonata or similar </p>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <span>$166.66</span>
                                                <p>Price Per day</p>
                                                <button type="button">Book Now</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-lg-5  as-car-equal-box">
                        <div class="as-car-box">
                            <img src="assets/img/car-img.png" alt="car1" class="img-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="as-car-box-sub-category">
                                        <li><i class="fa fa-user"></i> 4</li>
                                        <li class="doorsinfo"><i class="fa fa-suitcase"></i> 5</li>
                                        <li><i class="fa fa-accusoft"></i> Ac</li>
                                    </ul>

                                    <ul class="as-car-box-manual">
                                        <li><i class="fa fa-check"></i> Manual Transmission</li>
                                        <li><i class="fa fa-check"></i> Air Conditioning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7  as-car-equal-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="as-car-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h3>Nissan Versa Or Similar</h3>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <p> <b>Free Cancellation</b> </p>

                                            </div>
                                        </div>
                                    </div>

                                    <p>Class : Compact Pricelne</p>
                                    <p class="as-car-features"> Car Features</p>
                                    <p><i class="fa fa-check"></i> Air Conditioning</p>
                                    <p><i class="fa fa-check"></i> Seating 5 People</p>
                                    <p><i class="fa fa-check"></i> Cargo 2 Suitcases</p>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p class="as-alamo"> Provided By: <b>Alamo</b></p>

                                            <p>Alamo Rent a Car</p>
                                            <p>Volkswagen Jetta, Hyundai Sonata or similar </p>
                                        </div>
                                        <div class="col-lg-5 as-car-right-content">
                                            <div class="as-book-now-button">
                                                <span>$166.66</span>
                                                <p>Price Per day</p>
                                                <button type="button">Book Now</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Searchng Box end -->
    
@endsection