@section('title','Flight Payment - Triphomer')
@extends('layouts.home')
@section('content')
<style>
    .as-listing-ticket-content {
    background-color: #fff;
    margin-left: 0px;
}
</style>
 <section class="as-main-booking-box as-main-booking-heading">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-2 as-goback-btn">
                            <a href="listing.html"><button type="button" class="btn btn-go-back">Go Back</button></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="">
                                <h3>Review Trip Details and Book</h3>
                                <p>You're on the final step. Only a few more minutes to finish!</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-7 congrats-slde-show "><i class="fa fa-check"></i><strong class="congratSize">
                            Congratulations!</strong> <span>You have got the best offer. It's a steal - <strong>Wait no
                                More!</strong></span>
                    </div>

                    <div class="col-lg-4 offset-lg-1 free-cancellation-slide-show">
                        <div class="FREE_Cancellation">
                            <i class="fa fa-check"></i><strong class="cancellation">Free Cancellation</strong> within 24
                            hours of booking
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-4 as-book-now-ticket">
                        <b>Book Now</b> only <span style="color: brown">9 seats</span> left at this price!
                    </div>

                    <div class="col-lg-3 offset-lg-3 as-flexible-date">
                        <span class="Flexi_nearby">
                            &nbsp; &nbsp;<img src="assets/img/calender.png" style="vertical-align: middle;">
                            This is a Flexible Date option. <i class="fa fa-question-circle"></i>

                        </span>
                    </div>
                    <div class="col-lg-2 as-saving-price">
                        <span class="payment_save">
                            <b>Saving</b> $413.04 <i class="fa fa-question-circle"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-10 mx-auto as-main-booking-box">
                <div class="row">
                    <div class="col-lg-12 col-12 as-booking-heading">

                        <span> <i class="fa fa-plane"></i>
                            <h6>Flight Details</h6>
                        </span>
                    </div>
                </div>
                <div class="row as-flight-detail-box">
                    <div class="col-lg-12 as-listing-ticket-content">
                        <div class="row as-listing-ticket-row">
                            <div class="col-lg-3 col-md-3 col-3 as-payment-img">
                                <img src="assets/img/air-logo.png" alt="airlogo" class="img-fluid as-ticket-img">
                                <p class="as-img-content">American Airlines</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <span class="as-souce-flight">

                                    <span><strong class="highlight bg-high">DEL, </strong>Delhi Indira Gandhi
                                        Intl</span><br>

                                    <strong class="highlight">01:15 AM, </strong><span
                                        class="date_bg LightYellowBack">Sat, Apr 17, 2021</span><br>
                                </span>

                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <h6 class="as-duration-ticket">02h 38m </h6>
                                <p>Non Stop</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <span class="as-souce-flight">

                                    <span><strong class="highlight bg-high">CDG, </strong>Charles De Gaulle Intl
                                        Arpt</span><br>
                                    <strong class="highlight">06:40 AM, </strong> Sat, Apr 17, 2021<br>
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12 as-listing-ticket-content">
                        <div class="row as-listing-ticket-row">
                            <div class="col-lg-3 col-md-3 col-3 as-payment-img">
                                <img src="assets/img/air-logo.png" alt="airlogo" class="img-fluid as-ticket-img">
                                <p class="as-img-content">American Airlines</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <span class="as-souce-flight">

                                    <span><strong class="highlight bg-high">DEL, </strong>Delhi Indira Gandhi
                                        Intl</span><br>

                                    <strong class="highlight">01:15 AM, </strong><span
                                        class="date_bg LightYellowBack">Sat, Apr 17, 2021</span><br>
                                </span>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <h6 class="as-duration-ticket">02h 38m </h6>
                                <p>Non Stop</p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <span class="as-souce-flight">

                                    <span><strong class="highlight bg-high">DEL, </strong>Delhi Indira Gandhi
                                        Intl</span><br>

                                    <strong class="highlight">01:15 AM, </strong><span
                                        class="date_bg LightYellowBack">Sat, Apr 17, 2021</span><br>
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 as-baggage-dropdown">
                        <a href="#"> Additional Baggage Charges may apply</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 mx-auto as-main-booking-box">
                <div class="row">
                    <div class="col-lg-12 col-12 as-booking-heading">

                        <span> <i class="fa fa-user"></i>
                            <h6>Traveler Details</h6>
                        </span>
                    </div>
                </div>
                <div class="row as-flight-detail-box">
                    <div class="col-lg-12 as-listing-ticket-content">
                        <div class="row as-listing-ticket-row">
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Adult
                                    </label>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-6" style="text-align: end;">

                                <span>
                                    1/1 selected
                                </span>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-12 as-listing-ticket-content">
                        <div class="row as-listing-ticket-row">
                            <div class="col-lg-12">


                                <div class="form-row">
                                    <div class="form-group col-lg-1 col-md-3">
                                        <label for="title">Title</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Mr</option>
                                            <option>Mrs</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="middleName">Middle Name</label>
                                        <input type="text" class="form-control" id="middletname"
                                            placeholder="Middle Name">
                                    </div>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="lasttName">Last Name</label>
                                        <input type="text" class="form-control" id="lasttname" placeholder="Last Name">
                                    </div>

                                    <div class="col-lg-4 col-md-9">

                                        <label for="dob">DOB</label>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-4">
                                                <select id="month" class="form-control">
                                                    <option selected>Month</option>
                                                    <option>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                </select>
                                            </div>


                                            <div class="col-lg-4 col-md-4 col-4">
                                                <select id="day" class="form-control">
                                                    <option selected>Day</option>
                                                    <option>Jan</option>
                                                    <option>Feb</option>
                                                    <option>Mar</option>
                                                </select>
                                            </div>


                                            <div class="col-lg-4 col-md-4 col-4">
                                                <select id="year" class="form-control">
                                                    <option selected>Year</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-1 col-md-3">
                                        <label for="inputState">Gender</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 as-baggage-dropdown">
                        <button type="button" class="btn add-passenger">ADD Passanger</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 mx-auto as-main-booking-box">
                <div class="row">
                    <div class="col-lg-12 col-12 as-booking-heading">

                        <span> <i class="fa fa-user"></i>
                            <h6>Price Summary</h6>
                        </span>
                    </div>
                </div>
                <div class="row as-flight-detail-box" style="padding-bottom:0px">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-9">
                                <table class="as-price-summary-table">
                                    <thead>
                                        <td>Traveler(s)</td>
                                        <td>Base Price</td>
                                        <td>taxes & Fees</td>
                                        <td>Sub Total</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1 Adult</td>
                                            <td>$130</td>
                                            <td>$54</td>
                                            <td>$184</td>
                                        </tr>

                                    </tbody>

                                    <thead class="as-subtotal">
                                        <td>Sub Total</td>
                                        <td></td>
                                        <td></td>
                                        <td>$184</td>
                                    </thead>

                                </table class="as-price-toal">


                                <div>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">

                                <div class="form-group"> <label class="form-check-label" for="promo-code">
                                        Promo Code
                                    </label>
                                    <div class="input-group"> <input type="text" class="form-control coupon" name=""
                                            placeholder="Coupon code"> <span class="input-group-append"> <button
                                                class="btn btn-apply coupon">Apply</button> </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 as-total-price-summary">
                        <div class="row">
                            <div class="col-lg-9 ">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9">

                                        <h6>
                                            Total Price:
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <h6>$184</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
     

        <div class="col-lg-10 mx-auto as-main-booking-box">
            <div class="row">
                <div class="col-lg-12 col-12 as-booking-heading">

                    <span> <i class="fa fa-user"></i>
                        <h6>Payment Method</h6>
                    </span>
                </div>
            </div>
            <div class="row as-flight-detail-box">

                <div class="col-lg-9 offset-lg-3">
                    <div class="as-copy-right-content d-flex align-items-center pt-3 pb-3">

                        <img src="assets/img/master card.png" alt="">
                        <img src="assets/img/visa.png" alt="">
                        <img src="assets/img/AMC.png" alt="">
                        <img src="assets/img/discover.png" alt="">
                        <img src="assets/img/Diners club.png" alt="">
                    </div>
                </div>

                <div class="col-lg-12">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-3 col-md-4 col-form-label">Credit / Debit Card
                                Number*</label>

                            <div class="col-lg-5 col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg
                                                class="svg-inline--fa fa-credit-card fa-w-18" aria-hidden="true"
                                                focusable="false" data-prefix="fa" data-icon="credit-card" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z">
                                                </path>
                                            </svg><!-- <i class="fa fa-credit-card"></i> --></span>
                                    </div>
                                    <input class="form-control" required="" type="text"
                                        placeholder="Credit / Debit Card Number" name="username">
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-3 col-md-4 col-form-label">Card Holder's
                                Name*</label>
                            <div class="col-lg-5 col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg class="svg-inline--fa fa-user fa-w-14"
                                                aria-hidden="true" focusable="false" data-prefix="fa" data-icon="user"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                                </path>
                                            </svg><!-- <i class="fa fa-user"></i> --></span>
                                    </div>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Card Holder's Name" required="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-3 col-md-4 col-form-label">Expiration</label>
                            <div class="col-lg-5 col-md-6">
                                <div class="form-group">

                                    <div class="form-inline">
                                        <select class="form-control" style="width:45%">
                                            <option selected="" value="1">Month</option>
                                            <option>Janaury</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <span style="width:10%; text-align: center"> / </span>
                                        <select class="form-control" style="width:45%">
                                            <option>Year</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-3 col-md-4 col-form-label">Card Verification
                                Number*</label>
                            <div class="col-lg-5 col-md-6">
                                <input type="text" class="form-control" id="inputPassword" placeholder="CVV">
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>

        <!-- contact secton  css start -->

        <div class="col-lg-10 mx-auto as-main-booking-box mb-4">
            <div class="row">
                <div class="col-lg-6 col-12 as-booking-heading">
                    <div class="row">
                        <div class="col-lg-12">
                            <span> <i class="fa fa-user"></i>
                                <h6>Billing Information</h6>
                            </span>
                        </div>
                    </div>
                    <div class="row as-flight-detail-box as-custom-desktop-height-box">
                        <div class="col-lg-12">
                            <form>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Country*</label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control">
                                            <option selected>India</option>
                                            <option>United state</option>
                                            <option>United kindom</option>
                                            <option>China</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Address*</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword"
                                            placeholder="City Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">State*</label>
                                    <div class="col-sm-9">
                                        <select id="inputState" class="form-control">
                                            <option selected>Delhi</option>
                                            <option>Bihar</option>
                                            <option>Punjab</option>
                                            <option>Uttar Pradesh</option>
                                            <option>Uttarakhand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Zip*</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword" placeholder="Zip">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 as-mobile-contact-box" style="padding-right:0px">
                    <div class="as-booking-heading">

                        <div class="col-lg-12">
                            <span> <i class="fa fa-user"></i>
                                <h6>Contact Information</h6>
                            </span>
                        </div>

                        <div class="col-lg-12 as-contact-information-box">
                            <form>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Billing Phone*</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword"
                                            placeholder="Billing Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Mobile Phone*</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword"
                                            placeholder="Mobile Phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Email*</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputPassword" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Retype Email*</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword"
                                            placeholder="Retype Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check col-lg-9 offset-lg-3">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Send me the latest travel deals, special offers, coupons and fare sales.
                                        </label>
                                    </div>
                                </div>
                                <div class="right Contact_info"> <small>We'll personalise your Confirmation email and
                                        other notifications to fit your travel needs</small></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact css end -->

        <div class="col-lg-10 mx-auto as-main-booking-box mb-4">
            <div class="row">
                <div class="col-lg-12 col-12 as-booking-heading">

                    <span> <i class="fa fa-user"></i>
                        <h6>Policies & Review</h6>
                    </span>
                </div>
            </div>
            <div class="row as-flight-detail-box">
                <div class="col-lg-12">
                    <h4>Agreement between Customer and Triphomer</h4>
                    <p style="text-align: justify;">Please confirm that the names of travellers, date and time of
                        flight
                        departures are accurate. Tickets are non-transferable and any change in the name of
                        traveller is
                        not permitted. Date and routing changes will be subject to airline
                        penalties and our service fees. Fares are not guaranteed until ticketed. All our service
                        fees
                        and taxes are included in the total ticket cost. For major airlines - tickets may be
                        refunded if
                        requested within twenty four (24) hours
                        from the time of purchase at no cost, however, if the customer decides to cancel a ticket
                        after
                        24 hours from the time of booking, a nominal cancellation fee will be charged. For low cost
                        carriers (LCC), ticket will be non-refundable
                        once booked.</p>

                    <h4 style="padding-top:15px">Refund timelines, Policies & Process</h4>
                    <p style="text-align: justify;">Please confirm that the names of travellers, date and time of
                        flight
                        departures are accurate. Tickets are non-transferable and any change in the name of
                        traveller is
                        not permitted. Date and routing changes will be subject to airline
                        penalties and our service fees. Fares are not guaranteed until ticketed. All our service
                        fees
                        and taxes are included in the total ticket cost. For major airlines - tickets may be
                        refunded if
                        requested within twenty four (24) hours
                        from the time of purchase at no cost, however, if the customer decides to cancel a ticket
                        after
                        24 hours from the time of booking, a nominal cancellation fee will be charged. For low cost
                        carriers (LCC), ticket will be non-refundable
                        once booked.</p>

                    <hr>
                    <div class="row">
                        <div class="col-lg-12 as-accepted-term">
                            <p>By clicking Booking Now I agree that I have read and accepted Triphomer.com <a
                                    href="terms.html">Terms and
                                    Condition</a> and <a href="policy.html"> Privacy Policy</a> </p>

                            <button type="button" class="btn btn-apply">Book Now</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    </div>   
@endsection