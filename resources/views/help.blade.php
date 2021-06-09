@section('title','Help - Triphomer')
@extends('layouts.home')
@section('content')
 <style>
        .as-help-container {
            margin-top: 40px;
            margin-bottom: 40px
        }
    </style>
    <div class="container as-help-container">
        <div id="accordion">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="list-group as-custom-list-group" id="list-tab" role="tablist">

                                <a class="list-group-item list-group-item-action active" id="list-help-list"
                                    data-toggle="list" href="#list-help" role="tab" aria-controls="help">Help FAQs</a>

                                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"
                                    href="#list-home" role="tab" aria-controls="home">Flights</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                    data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Cars</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                    data-toggle="list" href="#list-messages" role="tab"
                                    aria-controls="messages">Hotels</a>

                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                    data-toggle="list" href="#list-settings" role="tab"
                                    aria-controls="settings">Cruises</a>

                                <a class="list-group-item list-group-item-action" id="list-holiday-list"
                                    data-toggle="list" href="#list-holiday" role="tab" aria-controls="holiday">Holiday
                                    Packages</a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-help" role="tabpanel"
                                    aria-labelledby="list-help-list">

                                    <div class="card">
                                        <div class="card-header" id="heading1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse1" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Travel affected by
                                                    COVID-19 :
                                                    What to know and Do
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Due to COVID-19, most refunds for flights, including when they’re
                                                    part of a
                                                    package, are issued within 12 weeks. Some refunds could take a bit
                                                    longer,
                                                    depending on the airline.</p>
                                                <p>Refunds for hotel, car, or activity, including when they’re part of a
                                                    package, are processed within our normal timeframe, 24 hours from
                                                    the
                                                    cancellation request. Keep in mind, your bank or payment service
                                                    determines
                                                    when the funds become available in your account.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading2">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse2" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> How To Cancel Your
                                                    Booking
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ol>
                                                    <li>
                                                        Do It By Yourself
                                                    </li>
                                                    <ul>
                                                        <li>Log into your Trip Homer account through our website
                                                            www.triphomer.com</li>
                                                        <li> Select the booking history option from the drop down menu
                                                            next to
                                                            your profile</li>
                                                        <li> Click on the booking which you would like to cancel</li>
                                                        <li>Click on the “cancel your booking” link within your
                                                            reservation
                                                            page</li>
                                                        <li> Check the “I agree with term and conditions” box once you
                                                            go
                                                            through the terms and conditions associated with
                                                            cancellation and
                                                            you’re satisfied with it.</li>
                                                        <li>You will receive an email in your inbox shortly with the
                                                            confirmation for the cancelation of the booking. Email will
                                                            not
                                                            include the information regarding the refund, once we have
                                                            processed
                                                            your request
                                                            we will notify you again.</li>
                                                    </ul>
                                                    <li>Connect with Customer Support </li>
                                                    <ul>
                                                        <li>You can directly reach out to our customer support
                                                            through email
                                                            support@triphomer.com or you can dial +1111111 and they will
                                                            be more
                                                            than happy to assist you and resolve your issue.</li>
                                                    </ul>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading3">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse3" aria-expanded="false"
                                                    aria-controls="collapse3">
                                                    <i class="fas fa-chevron-circle-right"></i> How to Modify Your
                                                    Booking

                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                To make any changes regarding dates, time or location for your
                                                reservation
                                                please reach out to our customer support through email
                                                support@triphomer.com or
                                                you can dial +1111111 and they will be more than happy to assist you and
                                                resolve
                                                your issue.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse4" aria-expanded="false"
                                                    aria-controls="collapse4">
                                                    <i class="fas fa-chevron-circle-right"></i> Latest Cleaning Policies
                                                    By Car
                                                    Rental
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                In response to COVID-19, many of the most trusted rental car companies
                                                have
                                                updated their cleaning policies. You can read the latest Rental Car
                                                Supplier
                                                Cleaning Procedures here.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse5" aria-expanded="false"
                                                    aria-controls="collapse5">
                                                    <i class="fas fa-chevron-circle-right"></i> Latest Cancellation
                                                    Policies By
                                                    Car Rentals and Airlines
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>You can read the latest Airline Change/Cancellation policies
                                                        here.</li>
                                                    <li>You can read the latest Rental Car Change/Cancellation policies
                                                        here.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading6">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse6" aria-expanded="false"
                                                    aria-controls="collapse6">
                                                    <i class="fas fa-chevron-circle-right"></i> Information about
                                                    Domestic
                                                    Travel Restrictions
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>CT Travel Restrictions</li>
                                                    <li>HI Travel Restrictions</li>
                                                    <li>
                                                        NJ Travel Restrictions
                                                    </li>
                                                    <li>NY Travel Restrictions
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading7">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse7" aria-expanded="false"
                                                    aria-controls="collapse7">
                                                    <i class="fas fa-chevron-circle-right"></i> Book a Flight Using
                                                    Airline
                                                    Credit
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Once you cancel or change your non-refundable flight, airlines will
                                                    reward
                                                    you with the airline credit instead of a refund so you will book
                                                    their
                                                    flight again. But after the pandemic lot of things have changed
                                                    which
                                                    you should know:
                                                </p>
                                                <ul>
                                                    <li>If your flight was cancelled due to COVID-19 then you can read
                                                        the
                                                        updated airline policies to know how you can redeem your airline
                                                        credit.
                                                        Many airlines are waiving change fees when it comes to
                                                        rebooking.</li>
                                                    <li>If you have a credit for a low cost airline such as Frontier or
                                                        Spirit
                                                        airlines then you need to directly contact the airlines for
                                                        redeeming
                                                        your airline credit.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="heading8">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse8" aria-expanded="false"
                                                    aria-controls="collapse8">
                                                    <i class="fas fa-chevron-circle-right"></i> Keep the following in
                                                    mind when
                                                    redeeming your credit:
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>All you need is your itinerary number and ticket number to
                                                        redeem your
                                                        airline credit.</li>
                                                    <li>Airline credits come with a travel-by date, so be sure to factor
                                                        this
                                                        into your planning.</li>
                                                    <li>
                                                        Airlines give separate credits to each traveler; you won’t be
                                                        able to
                                                        combine or transfer credits.

                                                    </li>
                                                    <li>The credit can be used only with the airline that provided the
                                                        credit.
                                                    </li>
                                                    <li>
                                                        Airline credits can’t be used for additional services, like
                                                        meals, seat
                                                        upgrades and so on.
                                                    </li>
                                                    <li>Your new flight must depart from the same country as was shown
                                                        on your
                                                        original ticket.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading9">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse9" aria-expanded="false"
                                                    aria-controls="collapse9">
                                                    <i class="fas fa-chevron-circle-right"></i> How to use your airline
                                                    credit

                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse9" class="collapse" aria-labelledby="heading9"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>All details of your airline credit, such as traveler names,
                                                        credit
                                                        amount, departing and arriving airports, ticket numbers and
                                                        expiration
                                                        dates are in your cancelation email.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading10">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse10" aria-expanded="false"
                                                    aria-controls="collapse10">
                                                    <i class="fas fa-chevron-circle-right"></i> Good to know

                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>If your new flight costs more than your airline credit amount,
                                                        you must
                                                        pay any remaining difference. </li>
                                                    <li>Some airlines only allow you to use up to the value of the
                                                        credit
                                                        received on a single trip, meaning you would lose any credit
                                                        left over.
                                                        This is per the airline’s policy that includes your cancelation
                                                        email.
                                                    </li>
                                                    <li>
                                                        If you choose a different destination when booking with an
                                                        airline
                                                        credit, some taxes may be forfeited, and new ones introduced.
                                                        Keep in
                                                        mind that this can impact how you can use your flight credit.
                                                    </li>
                                                    <li>NY Travel Restrictions
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="list-home" role="tabpanel"
                                    aria-labelledby="list-home-list">
                                    <div class="card">
                                        <div class="card-header" id="heading11">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse11" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Review Itinerary
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse11" class="collapse" aria-labelledby="heading11"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Customer satisfaction is our top priority, once you book your flight
                                                    through
                                                    our web portal or through our customer executive, you will receive
                                                    an email
                                                    along with all the details about your booking. You can either
                                                    show the same e-ticket at the airport or you can print it. (We
                                                    suggest not
                                                    printing the ticket for an eco-friendly environment).</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading12">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse12" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> To view your booking
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse12" class="collapse" aria-labelledby="heading12"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Navigate to the “Manage Trips” section where you will be able to view
                                                    all of
                                                    your bookings, select the reservation which you would like to view
                                                    and you
                                                    can email or print the same.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading13">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse13" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Forgot your Itinerary
                                                    number?
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse13" class="collapse" aria-labelledby="heading13"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Not a problem, we got you covered. You will get an option stating
                                                    “Forgot
                                                    Itinerary number” under the “Provide Itinerary Number” section, once
                                                    you
                                                    select the Forgot Itinerary Number you will have to fill out the
                                                    details regarding your reservation which will allow us to recover
                                                    your
                                                    Itinerary number.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading14">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse14" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Still need help?
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse14" class="collapse" aria-labelledby="heading14"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>If you are facing other issues then you can directly reach out to our
                                                    customer service executive, we provide 24x7 support.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading15">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse15" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Check-in
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse15" class="collapse" aria-labelledby="heading15"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>You need the 6-character confirmation code to check-in.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading16">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse16" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Check-in online

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse16" class="collapse" aria-labelledby="heading16"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Passengers can check-in online through our web portal or mobile
                                                    application.
                                                    Online check-in will be available 24 hours prior to the departure of
                                                    the
                                                    flight.
                                                </p>
                                                <p>To check-in online just select the airline you are travelling with
                                                    from the
                                                    drop down box below. Once you select your airline, click on the
                                                    online
                                                    check-in box and you will be redirected to the check-in web page
                                                    of the particular airline.</p>
                                                <p>Check-in drop down box with all airlines Check-in now button</p>
                                                <p>If you are travelling with check-in luggage then you can directly
                                                    head
                                                    towards the check-in kiosk desk of your airline at the airport and
                                                    the
                                                    airline executive will assist you with the check-in baggage.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading17">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse17" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Check-in at the Airport

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse17" class="collapse" aria-labelledby="heading17"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Passengers can directly check-in at the airport itself. Check-in
                                                    counters
                                                    open 2-3 hours prior to the departure of the flight. Check-in time
                                                    may vary
                                                    depending on your airline, check-in time will be mentioned in
                                                    your electronic ticket which you would have received in the email
                                                    while
                                                    making the booking.
                                                </p>
                                                <p>Once you reach the airport, just head towards the check-in counter of
                                                    your
                                                    airline. Always carry a government issued photo ID card and the
                                                    confirmation
                                                    code of your flight which you will need to provide to the airline
                                                    executive.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading18">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse18" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Need any help?

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse19" class="collapse" aria-labelledby="heading19"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>If you are facing other issues then you can directly reach out to our
                                                    customer service executive, we provide 24x7 support.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading20">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse20" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Seat
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse20" class="collapse" aria-labelledby="heading20"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Feeling tired and need an upgrade to Business/First class or
                                                    travelling with
                                                    your friends/ family and wanting to sit with them then these details
                                                    will
                                                    surely provide a solution to your problems.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading21">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse21" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Choose your own seat
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse21" class="collapse" aria-labelledby="heading21"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Not all the airlines allow the passengers to choose their own seat
                                                    but most
                                                    of the airlines do. You can either select the seat while booking
                                                    your flight
                                                    for which you will be charged an extra amount of money which
                                                    will guarantee that the seat will be yours. Passengers who didn’t
                                                    reserve
                                                    their seats while booking the flight can do it through the airline
                                                    website.
                                                    To reserve your seat online just select the airline you are
                                                    travelling with from the drop down box below. Once you select your
                                                    airline,
                                                    click on the reserve seat now and you will be redirected to the seat
                                                    reservation page of the particular airline.
                                                </p>
                                                Drop down box with all airlines reserve seat now button

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading22">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse22" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-chevron-circle-right"></i> Change your seat

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse22" class="collapse" aria-labelledby="heading22"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>If you have already reserved your seat but you want to change it, you
                                                    can do
                                                    so by visiting the airline website. Just reach out to our customer
                                                    service
                                                    executive through our helpline number and explain the situation,
                                                    you will be asked to provide the 6 digit confirmation number, now
                                                    sit back
                                                    and relax. Our executive will do the rest for you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading23">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse23" aria-expanded="true"
                                                    aria-controls="collapse23">
                                                    <i class="fas fa-chevron-circle-right"></i> Baggage
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse23" class="collapse" aria-labelledby="heading23"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>To make sure that you carry the baggage according to the airline
                                                    guidelines
                                                    and don’t pay additional amounts to the airlines while you do the
                                                    baggage
                                                    check-in then you must read this document carefully.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading24">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse24" aria-expanded="true"
                                                    aria-controls="collapse24">
                                                    <i class="fas fa-chevron-circle-right"></i> Baggage allowance and
                                                    Charges
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse24" class="collapse" aria-labelledby="heading24"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Baggage allowance may differ from airline to airline, every airline
                                                    has their
                                                    own guidelines regarding the baggage allowance which will be
                                                    mentioned in
                                                    the e-ticket you received after making your reservation. To
                                                    make sure you are travelling with the sufficient amount of luggage
                                                    you are
                                                    allowed to carry, please refer to the below information. You can
                                                    select the
                                                    airline you are travelling with and pull out all the information
                                                    regarding the baggage allowance and the additional charges
                                                    applicable to
                                                    carry extra luggage. Select airline drop down box find button
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading25">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse25" aria-expanded="true"
                                                    aria-controls="collapse25">
                                                    <i class="fas fa-chevron-circle-right"></i> To Change your booking
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse25" class="collapse" aria-labelledby="heading25"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Change in plan? Worry not, we got you covered. You can make changes
                                                    to your
                                                    itinerary by navigating to the “Manage Trips” option located in the
                                                    top Menu
                                                    of Trip Homers website or you can directly reach out to our
                                                    customer service executive through our helpline number and they will
                                                    take
                                                    care of it. Before you make any changes to your booking, make sure
                                                    you read
                                                    the terms & conditions mentioned in your e-ticket regarding
                                                    the change and cancellation charges.
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading26">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse26" aria-expanded="true"
                                                    aria-controls="collapse26">
                                                    <i class="fas fa-chevron-circle-right"></i> How to change?
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse26" class="collapse" aria-labelledby="heading26"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It depends on the airline whether they will charge any additional
                                                    charges or
                                                    not if you make any changes in your booking.
                                                </p>
                                                <ul>
                                                    <li>To make changes, navigate to the Manage Trips section.</li>
                                                    <li>Select the booking which you would like to change.</li>
                                                    <li>Select the change flight option.</li>
                                                    <li>You can now book the new flight and you will see if there are
                                                        any extra
                                                        charges applicable to change your flight. </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading27">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse27" aria-expanded="true"
                                                    aria-controls="collapse27">
                                                    <i class="fas fa-chevron-circle-right"></i> Change in the last 24
                                                    hour
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse27" class="collapse" aria-labelledby="heading27"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>To make any changes in the itinerary customers can directly reach out
                                                    to Trip
                                                    Homer customer service executives and they will do the rest for you.
                                                </p>
                                                <p>
                                                    Most of the airlines let you cancel the flight without charging any
                                                    additional amount. The terms and conditions will be mentioned in the
                                                    e-ticket.
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading28">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse28" aria-expanded="true"
                                                    aria-controls="collapse28">
                                                    <i class="fas fa-chevron-circle-right"></i> Miscellaneous Changes

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse28" class="collapse" aria-labelledby="heading28"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Some airlines would like to take charge in their own hands and you
                                                    will not
                                                    be able to make the changes in such airlines through our platform.
                                                    However,
                                                    you can directly reach out to our customer service executive
                                                    through our helpline number and they will do the needful for you
                                                    without any
                                                    additional charges depending on the airlines.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading28">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse28" aria-expanded="true"
                                                    aria-controls="collapse28">
                                                    <i class="fas fa-chevron-circle-right"></i> Airline Schedule Change
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse28" class="collapse" aria-labelledby="heading28"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Depending on many circumstances the airline might reschedule or
                                                    change the
                                                    flight. Due to bad weather, Issues detected in flight inspection,
                                                    pilot
                                                    health issues or any emergency at the airport. If there is a
                                                    reschedule
                                                    or change in your flight, you will receive an update from your
                                                    airlines
                                                    regarding the information related to your flight on email as well as
                                                    on your
                                                    contact number. You can either opt for the itinerary which
                                                    airline is offering or you can cancel the flight and make a new
                                                    booking with
                                                    different airlines. You will receive the payment directly in the
                                                    account
                                                    through which you made the payment. There will be no additional
                                                    charges applicable if the airline rescheduled the flight. If you
                                                    want a
                                                    hassle free reschedule of your flight, you can directly give a call
                                                    to Trip
                                                    Homer customer executive through our helpline number and they
                                                    will take care of the rest.
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading29">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse29" aria-expanded="true"
                                                    aria-controls="collapse29">
                                                    <i class="fas fa-chevron-circle-right"></i> Payment & Receipt

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse29" class="collapse" aria-labelledby="heading29"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Receipt may vary depending on which service you choose and which
                                                    payment
                                                    method you choose to pay.
                                                </p>
                                                Drop down box with all airlines reserve seat now button

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading30">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse30" aria-expanded="true"
                                                    aria-controls="collapse30">
                                                    <i class="fas fa-chevron-circle-right"></i> From the airline
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse30" class="collapse" aria-labelledby="heading30"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>If you made the booking using our platform then you will receive an
                                                    email to
                                                    your registered email address with all the details regarding your
                                                    booking
                                                    confirmation and it will also include a separate attachment
                                                    regarding the payment receipt which includes the payment you made
                                                    inclusive
                                                    of all taxes.
                                                </p>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading31">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse31" aria-expanded="true"
                                                    aria-controls="collapse31">
                                                    <i class="fas fa-chevron-circle-right"></i> From the Hotel
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse31" class="collapse" aria-labelledby="heading31"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>If you booked your hotel and opt for prepayment then you will receive
                                                    a
                                                    confirmation email to your registered email address where all the
                                                    details
                                                    regarding your booking will be mentioned. You will also receive a
                                                    payment receipt email which includes how much payment you made
                                                    inclusive of
                                                    all taxes. For the prepayment option you will get the payment
                                                    receipt from
                                                    your hotel once you check-out and clear the bill. Most of
                                                    the hotels charge the guests once they check-out from the hotel and
                                                    provide
                                                    the receipt at that time.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading32">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse32" aria-expanded="true"
                                                    aria-controls="collapse32">
                                                    <i class="fas fa-chevron-circle-right"></i>From the car rental
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse32" class="collapse" aria-labelledby="heading32"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Even if you have opted for the prepayment option, you will only be
                                                    able to
                                                    get the payment receipt once you complete your trip and drop the car
                                                    at the
                                                    location. The receipt will include any additional charges such as
                                                    speed
                                                    violation, accidental damage,
                                                    or any ticket issued by police. Any additional charges have to be
                                                    paid
                                                    within a week.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading33">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse33" aria-expanded="true"
                                                    aria-controls="collapse33">
                                                    <i class="fas fa-chevron-circle-right"></i>How to redeem airline
                                                    credit
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse33" class="collapse" aria-labelledby="heading33"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Airline credit is transferred to the passenger’s account of that
                                                    airline.
                                                    Passengers are eligible to utilize the credit for either domestic or
                                                    international flights. Airline credit can be utilized within 1 year
                                                    from the
                                                    date of booking.
                                                </p>
                                                <p>To redeem the credit, you need to select the flight you want to fly
                                                    on and
                                                    fill out all the details required to make a booking, while you
                                                    proceed with
                                                    payment option you will encounter a coupon or credit options,
                                                    you can utilize the credit available and make the booking. If the
                                                    cost of
                                                    your flight exceeds the credit available then you will be contingent
                                                    to pay
                                                    the difference.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading34">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse34" aria-expanded="true"
                                                    aria-controls="collapse34">
                                                    <i class="fas fa-chevron-circle-right"></i>Flight Insurance
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse34" class="collapse" aria-labelledby="heading34"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    To provide the passenger with ease of travel we focus on adding two
                                                    types of
                                                    Insurance.
                                                <ul>
                                                    <li>Flight Cancellation Plan</li>
                                                    <li>Flight Protection Plan</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading35">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse35" aria-expanded="true"
                                                    aria-controls="collapse35">
                                                    <i class="fas fa-chevron-circle-right"></i>Flight Cancellation Plan
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse35" class="collapse" aria-labelledby="heading35"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>It includes the cancellation or any interruption in your trip.
                                                    </li>
                                                    <li>This plan includes the total reimbursement of your trip
                                                        including
                                                        cancellation of your trip prior to your departure. However terms
                                                        and
                                                        conditions are applicable.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading36">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse36" aria-expanded="true"
                                                    aria-controls="collapse36">
                                                    <i class="fas fa-chevron-circle-right"></i>Flight Protection Plan
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse36" class="collapse" aria-labelledby="heading36"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                    <li>This plan applies to passengers traveling all around the world
                                                        and it is
                                                        an add-on for Flight Cancellation Plan.</li>
                                                    <li>This plan covers the loss of death, any causality while
                                                        travelling, loss
                                                        of baggage, or damage of your baggage or personal item. However
                                                        terms
                                                        and conditions are applicable.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                    aria-labelledby="list-profile-list">
                                    <div class="card">
                                        <div class="card-header" id="heading37">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse37" aria-expanded="true"
                                                    aria-controls="collapse37">
                                                    <i class="fas fa-chevron-circle-right"></i>View your car booking
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse37" class="collapse" aria-labelledby="heading37"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Trip Homer always sends a confirmation email once you make a booking
                                                    through
                                                    our platform. Booking confirmation email includes your car booking
                                                    details
                                                    such as pick up and drop off times, locations, and date. Booking
                                                    confirmation email also contains the
                                                    terms and conditions applicable on your booking. Terms and
                                                    conditions can
                                                    vary depending on which third party car rental company you choose.
                                                    If you do
                                                    not have access to your registered email address and you
                                                    would like to send you a booking confirmation email to some other
                                                    email
                                                    address then you can do so by navigating to the “Manage Trips”
                                                    section and
                                                    select the booking which you would like to review. Once you
                                                    select the booking, you will have options to send the booking
                                                    confirmation
                                                    email to a custom email address, print it out, or receive the
                                                    details as a
                                                    text message on your mobile phone. If you still face any
                                                    issues then you can directly reach out to our customer service
                                                    executive,
                                                    either through email or phone. Trip Homer provides the best in class
                                                    24x7
                                                    dedicated support service for our customers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading38">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse38" aria-expanded="true"
                                                    aria-controls="collapse38">
                                                    <i class="fas fa-chevron-circle-right"></i>Adding a Driver
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse38" class="collapse" aria-labelledby="heading38"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    If you are on your honeymoon trip or travelling with your family and
                                                    looking
                                                    for a peaceful ride then adding a chauffeur with your car is the
                                                    best thing
                                                    to do. Forget the hassle of driving through traffic when you can
                                                    just sit
                                                    back, relax, and have a
                                                    chat with your partner or family. To add a driver along with your
                                                    booking
                                                    please reach out to our customer service executive and they will do
                                                    the rest
                                                    for you depending on the availability of drivers for your
                                                    location. You can directly pay the driver at the time of your pick
                                                    up. Rates
                                                    for adding a driver for your car will depend on how long you need
                                                    the driver
                                                    for and which location you are travelling to. The rates
                                                    may be higher for remote locations however our customer service
                                                    executive
                                                    will do their best to get the best rates for your trip. Also, you
                                                    can head
                                                    towards the car rental dealership and directly get in touch
                                                    with them regarding adding a driver to your booking however we
                                                    suggest to
                                                    contact our customer service executive to get the fares.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading39">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse39" aria-expanded="true"
                                                    aria-controls="collapse39">
                                                    <i class="fas fa-chevron-circle-right"></i>Accidental Damage
                                                    Coverage
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse39" class="collapse" aria-labelledby="heading39"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Whenever you rent a car from the car rental company, you will be
                                                    responsible
                                                    for anything that happens to the car. Whether the car gets stolen or
                                                    it gets
                                                    destroyed then you will be responsible for such things. To make sure
                                                    that
                                                    our customers travel with
                                                    peace of mind we provide a Accidental Damage Coverage Insurance plan
                                                    along
                                                    with your car. Opting for the Accidental Damage Coverage Insurance
                                                    totally
                                                    depends on you but we always suggest our customers to opt
                                                    for this feature as it provides a hassle free ride without worrying
                                                    much
                                                    about the car. You can either select this option while making your
                                                    booking
                                                    through our website or you can also opt for Accidental Damage
                                                    Coverage Insurance even after you booked your car. Accidental Damage
                                                    Coverage fees can vary depending on which car you choose. Accidental
                                                    Damage
                                                    Insure covers the cost of repair or replacement of the car,
                                                    whichever
                                                    is feasible.It also covers the loss of use which is nothing but the
                                                    amount
                                                    rental company is losing while the car is in the repair shop. To
                                                    avail the
                                                    Insurance you don’t need to go to any third party Auto Insurance
                                                    company. By any chance you are stuck in such a situation and need a
                                                    to avail
                                                    the benefit, just give a call to our customer service executive and
                                                    they
                                                    will take care of it.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading40">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse40" aria-expanded="true"
                                                    aria-controls="collapse40">
                                                    <i class="fas fa-chevron-circle-right"></i>Delayed or Cancelled
                                                    flight
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse40" class="collapse" aria-labelledby="heading40"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    If you are travelling to a particular airport and booked your car
                                                    from the
                                                    same airport then there might be a problem for you if there is any
                                                    delay or
                                                    rescheduling of your flight. Due to bad weather some flights get
                                                    diverted to
                                                    different airports which
                                                    is bummer for passengers who rented a car. To overcome such problems
                                                    we have
                                                    designed our platform in such a way that it will automatically
                                                    detect if
                                                    there is any delay or rescheduling of your flight. If such
                                                    a scenario occurs then our customer service executive will directly
                                                    get in
                                                    touch with the car rental company and work as a coordinator till the
                                                    problem
                                                    is resolved. Our motive is to provide hassle free travel
                                                    for our customers and to do so we have a team of customer service
                                                    executives
                                                    who are mainly dedicated to resolve such issues.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading41">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse41" aria-expanded="true"
                                                    aria-controls="collapse41">
                                                    <i class="fas fa-chevron-circle-right"></i>Change & Cancel

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse41" class="collapse" aria-labelledby="heading41"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    If you want to cancel your car rental booking or need to make a
                                                    change in
                                                    your Itinerary then worry not, we got you covered. We do not allow
                                                    passengers to cancel their car rental booking through online however
                                                    you can
                                                    directly reach out to our customer
                                                    service executive. To make a change in your booking, you need to
                                                    cancel your
                                                    current booking and book a new one as we do not allow passengers to
                                                    change
                                                    their itinerary for car rentals. Before cancelling your
                                                    current booking make sure you read the terms and conditions
                                                    mentioned in the
                                                    email you received when you booked your car as most of the prepaid
                                                    car
                                                    rental bookings are non-refundable. Accidental coverage Insurance
                                                    will automatically get cancelled once you cancel your booking. If
                                                    you still
                                                    have any concerns regarding cancellation or change of your car
                                                    rental
                                                    booking then please reach out to our customer service executive
                                                    and they will be happy to assist you. Our customer service
                                                    executives are
                                                    available 24x7.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading42">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse42" aria-expanded="true"
                                                    aria-controls="collapse42">
                                                    <i class="fas fa-chevron-circle-right"></i>Payment
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse42" class="collapse" aria-labelledby="heading42"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Every passenger has the right to know their fare details. To make it
                                                    easy
                                                    for our customers we have explained all the price quotations for car
                                                    rentals
                                                    which the amount you need to pay at the time of booking and the
                                                    amount you
                                                    need to pay when you pick
                                                    up your car.
                                                </p>
                                                <p>Basics of the price quote includes:
                                                <ul>
                                                    <li>Limited miles fees</li>
                                                    <li>Taxes</li>
                                                    <li>Airport car drop fees</li>
                                                    <li>Extra miles fees</li>
                                                    <li>Breakdown assistance</li>
                                                </ul>
                                                </p>
                                                <p>Basics of the price quote includes:
                                                <ul>
                                                    <li>Fuel cost</li>
                                                    <li>Out-of-hours pick-up and drop-off</li>
                                                    <li>Special equipment or accessories (such as infant seats or GPS)
                                                    </li>
                                                    <li>Toll road fees</li>
                                                    <li>Vehicle upgrades</li>
                                                    <li>Child lock seat</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading43">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse43" aria-expanded="true"
                                                    aria-controls="collapse43">
                                                    <i class="fas fa-chevron-circle-right"></i>Receipt
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse43" class="collapse" aria-labelledby="heading43"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Customers are entitled to receive the receipt based on how they made
                                                    their
                                                    payment. However the final receipt will be sent to your registered
                                                    email
                                                    address once you drop the car at the drop-off location. Even if you
                                                    have
                                                    opted for the prepaid payment
                                                    option, you will only be able to get the payment receipt once you
                                                    complete
                                                    your trip and drop the car at the location. The receipt will include
                                                    any
                                                    additional charges such as speed violation, accidental damage,
                                                    or any ticket issued by police. Any additional charges have to be
                                                    paid
                                                    within 1 week of time.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading44">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse44" aria-expanded="true"
                                                    aria-controls="collapse44">
                                                    <i class="fas fa-chevron-circle-right"></i>Booking
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse44" class="collapse" aria-labelledby="heading44"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    You can book a car through our web portal or mobile application. We
                                                    are
                                                    partnered with the best car rental companies in the world to provide
                                                    you the
                                                    best in class car rental service. Before booking a car we request
                                                    the
                                                    passengers to view the rules and
                                                    restrictions as there are specific age restrictions regarding the
                                                    passengers
                                                    who can drive the car.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                    aria-labelledby="list-messages-list">
                                    <div class="card">
                                        <div class="card-header" id="heading45">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse45" aria-expanded="true"
                                                    aria-controls="collapse45">
                                                    <i class="fas fa-chevron-circle-right"></i>Review your reservation
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse45" class="collapse" aria-labelledby="heading45"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    We are always eager to make travel easy for our customers. Whenever
                                                    you make
                                                    any booking through Trip Homer web portal or Mobile Application we
                                                    send a
                                                    booking confirmation email to your registered email address along
                                                    with your
                                                    booking details which include
                                                    check-in ,check-out date and time. By any chance you did not receive
                                                    the
                                                    confirmation email or you do not have the access to that email
                                                    address you
                                                    can surely view your booking again through Trip Homer Web Portal
                                                    or Mobile Application. Log in to your Trip Homer account and
                                                    navigate to the
                                                    Manage Trips section where you will be able to see your recent
                                                    bookings, you
                                                    can select the booking which you would like to review.
                                                    Customers can either send the booking confirmation to their custom
                                                    email
                                                    address or print it or do both. We also send a text message to your
                                                    registered mobile phone with all the details about your booking,
                                                    which
                                                    you can directly show at the hotel when you Check-in. (We recommend
                                                    using
                                                    the e-ticket for check-in for an eco-friendly environment).


                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading46">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse46" aria-expanded="true"
                                                    aria-controls="collapse46">
                                                    <i class="fas fa-chevron-circle-right"></i>Check-in & Check-out
                                                    Details
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse46" class="collapse" aria-labelledby="heading46"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Our focus is to provide our customers a hassle free stay and to make
                                                    it
                                                    smooth we have included all the details you need to know related to
                                                    your
                                                    booking in this section. We request our customers to read all the
                                                    information carefully. Customers can visit
                                                    the hotel anytime between their check-in time, whether it’s mid of
                                                    day or
                                                    mid of night, our partnered hotel executives will always be ready to
                                                    welcome
                                                    you at their property and make sure you have a pleasant
                                                    stay away from your busy work life.
                                                </p>
                                                <p>
                                                    Our partnered hotels are committed to make sure the guests feel
                                                    comfortable
                                                    and enjoy the lavishing property throughout their stay. You don’t
                                                    need any
                                                    kind of hurry to check-in, we understand that any problem can occur
                                                    and
                                                    there can be a delay in check-in
                                                    that’s why we provide 12 hours of buffer time for check-in and by
                                                    any chance
                                                    you exceed the buffer time you can directly call the hotel reception
                                                    and
                                                    inform them about the situation to make sure your room is
                                                    not given to any other guest. Once you reach the hotel, you need to
                                                    make
                                                    sure that you have the government issued ID with you which will be
                                                    used for
                                                    identification as well as security purposes. If you make any
                                                    change in your plan and decide not to show up at the hotel then the
                                                    hotel
                                                    will still charge you for your stay. However we suggest you to read
                                                    the
                                                    terms and conditions mentioned in your booking confirmation before
                                                    making any decision as some hotels might return the whole amount if
                                                    you
                                                    cancel your booking before a specific time.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading47">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse47" aria-expanded="true"
                                                    aria-controls="collapse47">
                                                    <i class="fas fa-chevron-circle-right"></i>Change or Cancel your
                                                    Booking
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse47" class="collapse" aria-labelledby="heading47"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <h6>Change your booking</h6>
                                                <p>
                                                    As we understand that there can be any problem that could occur with
                                                    any of
                                                    our customers and in that scenario they might want to postpone their
                                                    plan.
                                                    To provide a hassle free change in the itinerary we allow the
                                                    customer to
                                                    make the changes online through
                                                    Trip Homer Web Portal or Mobile Application. Navigate to the “Manage
                                                    Trips”
                                                    section in the main menu where you will be able to view your recent
                                                    bookings. Just select the booking which you would like to change
                                                    and the use of cutting edge technology in our website will
                                                    automatically
                                                    guide you with the next steps. We request our customers to read the
                                                    terms
                                                    and conditions mentioned in the email they received while making
                                                    the booking to know if there are any additional charges to make a
                                                    change in
                                                    their itinerary.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading48">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse48" aria-expanded="true"
                                                    aria-controls="collapse48">
                                                    <i class="fas fa-chevron-circle-right"></i>Cancel your booking
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse48" class="collapse" aria-labelledby="heading48"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    There can be any emergency and customers might want to cancel their
                                                    booking,
                                                    keeping that in mind we have designed Trip Homer in such a way that
                                                    it lets
                                                    the customer cancel the booking online through Trip Homer Web Portal
                                                    and
                                                    Mobile Application. However
                                                    the refund of your booking is contingent on whether you made the
                                                    refundable
                                                    booking or non-refundable booking. To cancel your booking just head
                                                    on to
                                                    our Website and login into your account. Navigate to the
                                                    “Manage Trips” section in the main menu and select the booking you
                                                    would
                                                    like to cancel and the use of cutting edge technology in our website
                                                    will
                                                    automatically guide you with the next steps. If you still need
                                                    any additional help then you can reach out to our customer service
                                                    executive
                                                    available 24x7.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading49">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse49" aria-expanded="true"
                                                    aria-controls="collapse49">
                                                    <i class="fas fa-chevron-circle-right"></i>Payment options
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse49" class="collapse" aria-labelledby="heading49"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    To make sure our customers book their hotel according to their
                                                    convenience
                                                    without worrying about the payment we provide customers with two
                                                    types of
                                                    payment options. Customers can either opt for the prepayment option
                                                    which
                                                    requires the customer to make
                                                    the payment online to confirm their booking or the customer can
                                                    choose the
                                                    post payment option where customer can book the hotel with 10% of
                                                    the total
                                                    amount and rest of the payment can be made while checking-out
                                                    from the hotel. In both types of payment methods mentioned above we
                                                    guarantee the customer that the room will be reserved for them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading50">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse50" aria-expanded="true"
                                                    aria-controls="collapse50">
                                                    <i class="fas fa-chevron-circle-right"></i>Hotel Ratings
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse50" class="collapse" aria-labelledby="heading50"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Trip Homer is a one stop solution for customers looking to stay in
                                                    lavishing
                                                    properties, penthouses, villas, resorts, couple friendly hotels, or
                                                    pet
                                                    friendly hotels. We provide the best places to stay that match your
                                                    class
                                                    and allow our customers to choose
                                                    their stay based on the hotel's ratings. Our Homer rating features
                                                    hotels
                                                    based on their hygiene quality, room service quality, hotel
                                                    location,
                                                    parking facility, and breakfast buffets.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading51">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse51" aria-expanded="true"
                                                    aria-controls="collapse51">
                                                    <i class="fas fa-chevron-circle-right"></i>Miscellaneous Request
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse51" class="collapse" aria-labelledby="heading51"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <h6>Make a special request while booking </h6>
                                                <p>
                                                    Customers who would like to add any additional requests such as
                                                    additional
                                                    bed, car service, Internet, sewing kit, hygiene products, and room
                                                    upgrades
                                                    can be added while you make your booking. Once you proceed towards
                                                    checkout
                                                    you will be notified to
                                                    add any special request with your booking.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                    aria-labelledby="list-settings-list">
                                    <div class="card">
                                        <div class="card-header" id="heading52">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse52" aria-expanded="true"
                                                    aria-controls="collapse52">
                                                    <i class="fas fa-chevron-circle-right"></i>Cruise line registration
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse52" class="collapse" aria-labelledby="heading52"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Want to head out to your dream vacation with your partner or with
                                                    your
                                                    family then Cruise is the best gateway for you. Blue ocean all
                                                    around you
                                                    and there is no time lost traveling between places that you visit.
                                                    As you
                                                    travel from one place to another,
                                                    you can have dinner, attend a comedy show, and even indulge in a spa
                                                    treatment. Traveling doesn't get any better than that. Once you
                                                    confirm your
                                                    booking through our web portal or mobile application you will
                                                    receive a booking confirmation email along with the cruise line link
                                                    through
                                                    which you are travelling. You need to head over to the cruise line
                                                    website
                                                    using that link where you will have to register and fill
                                                    out some additional information. That’s it. You are good to go.
                                                    Print out
                                                    the registration form and finish the paperwork and start packing for
                                                    your
                                                    dream vacation. If you face any issues regarding your booking
                                                    or not able to register then please reach out to us and we will be
                                                    happy to
                                                    help.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading53">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse53" aria-expanded="true"
                                                    aria-controls="collapse53">
                                                    <i class="fas fa-chevron-circle-right"></i>Change & Cancel
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse53" class="collapse" aria-labelledby="heading53"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    When it comes to change the cruise Itinerary or cancelling your
                                                    cruise
                                                    booking, it is completely different from changing or cancelling a
                                                    flight.
                                                    Cruise lines allow the customer to make a change in their itinerary
                                                    or
                                                    cancel their reservation 90 days prior
                                                    to the departure. If you make a change to your Itinerary or cancel
                                                    your
                                                    booking before 90 days from the departure date then there will not
                                                    be any
                                                    additional charges applicable and you will receive a complete
                                                    refund. Passengers who have already crossed the 90 days deadline
                                                    will be
                                                    contingent to pay the additional cancellation charges as the charges
                                                    vary
                                                    depending on how close you reach the sailing date.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading53">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse53" aria-expanded="true"
                                                    aria-controls="collapse53">
                                                    <i class="fas fa-chevron-circle-right"></i>Payment & Receipt
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse53" class="collapse" aria-labelledby="heading53"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>For cruises we accept the payment in two ways. Customers can either
                                                    pay the
                                                    full amount online through credit or debit card. Customers can
                                                    deposit 10%
                                                    of the total amount and pay the rest later. If you have opted
                                                    for the pay later option then we suggest you look into the booking
                                                    confirmation email to know till when you can make the complete
                                                    payment.
                                                    Customers who do not pay the whole amount by the final due date will
                                                    get their reservation cancelled and you will not be able to retrieve
                                                    the
                                                    deposit amount as well.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="list-holiday" role="tabpanel"
                                    aria-labelledby="list-holiday-list">
                                    <div class="card">
                                        <div class="card-header" id="heading54">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse54" aria-expanded="true"
                                                    aria-controls="collapse54">
                                                    <i class="fas fa-chevron-circle-right"></i>View your bookings
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse54" class="collapse" aria-labelledby="heading54"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Trip Homer is a customer centric travel website and for us the only
                                                    thing
                                                    that matters the most is customer satisfaction. To make it easy for
                                                    our
                                                    customers we have designed the website in such a way that customers
                                                    can perform any action in just a couple of clicks whether it’s
                                                    flight
                                                    booking, car rental booking, hotel booking, or a cruise booking.
                                                    Once you
                                                    complete your booking, you will receive a booking confirmation
                                                    email from Trip Homer which includes all the details regarding your
                                                    booking.
                                                    Hoewer if you do not have access to the registered email address
                                                    then you
                                                    can resend the booking confirmation email to any custom
                                                    email address. To do so, navigate to the “Manage Trips” section in
                                                    the main
                                                    menu and select the booking you would like to review. You can view
                                                    your
                                                    booking details, send it to any email address, send it to any
                                                    phone number, or print it out. If you still need any additional
                                                    information
                                                    which you are not able to view in the booking confirmation email
                                                    then you
                                                    can reach out to our customer service executive who is available
                                                    24x7.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading55">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse55" aria-expanded="true"
                                                    aria-controls="collapse55">
                                                    <i class="fas fa-chevron-circle-right"></i>Hotel Check-in &
                                                    Check-out
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse55" class="collapse" aria-labelledby="heading55"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Our focus is to provide our customers a hassle free stay and to make
                                                    it
                                                    smooth we have included all the details you need to know related to
                                                    your
                                                    booking in this section. We request our customers to read all the
                                                    information carefully. Customers can visit the hotel anytime between
                                                    their
                                                    check-in time, whether it’s mid of day or mid of night, our
                                                    partnered hotel
                                                    executives will always be ready to welcome you at their
                                                    property and make sure you have a pleasant stay away from your busy
                                                    work
                                                    life. Our partnered hotels are committed to make sure the guests
                                                    feel
                                                    comfortable and enjoy the lavishing property throughout their stay.
                                                    You don’t need any kind of hurry to check-in, we understand that any
                                                    problem
                                                    can occur and there can be a delay in check-in that’s why we provide
                                                    12
                                                    hours of buffer time for check-in and by any chance you exceed
                                                    the buffer time you can directly call the hotel reception and inform
                                                    them
                                                    about the situation to make sure your room is not given to any other
                                                    guest.
                                                    Once you reach the hotel, you need to make sure that you
                                                    have the government issued ID with you which will be used for
                                                    identification
                                                    as well as security purposes. If you make any change in your plan
                                                    and decide
                                                    not to show up at the hotel then the hotel will still
                                                    charge you for your stay. However we suggest you to read the terms
                                                    and
                                                    conditions mentioned in your booking confirmation before making any
                                                    decision
                                                    as some hotels might return the whole amount if you cancel
                                                    your booking before a specific time.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading56">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse56" aria-expanded="true"
                                                    aria-controls="collapse56">
                                                    <i class="fas fa-chevron-circle-right"></i>Baggage
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse56" class="collapse" aria-labelledby="heading56"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>To make sure that you carry the baggage according to the airline
                                                    guidelines
                                                    and don’t pay additional amounts to the airlines while you do the
                                                    baggage
                                                    check-in then you must read this document carefully.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading57">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse57" aria-expanded="true"
                                                    aria-controls="collapse57">
                                                    <i class="fas fa-chevron-circle-right"></i>Baggage allowance and
                                                    Charges
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse57" class="collapse" aria-labelledby="heading57"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Baggage allowance may differ from airline to airline, every airline
                                                    has their
                                                    own guidelines regarding the baggage allowance which will be
                                                    mentioned in
                                                    the e-ticket you received after making your reservation. To
                                                    make sure you are travelling with the sufficient amount of luggage
                                                    you are
                                                    allowed to carry, please refer to the below information. You can
                                                    select the
                                                    airline you are travelling with and pull out all the information
                                                    regarding the baggage allowance and the additional charges
                                                    applicable to
                                                    carry extra luggage. select airline drop down box find button

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="heading58">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse58" aria-expanded="true"
                                                    aria-controls="collapse58">
                                                    <i class="fas fa-chevron-circle-right"></i>Holiday Package Payment

                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse58" class="collapse" aria-labelledby="heading58"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>We only offer a single mode of payment. Customers have to make the
                                                    complete
                                                    payment at the time of booking, to make the payment you can either
                                                    use a
                                                    credit or debit card based on your convenience. Fare breakdown
                                                    will be mentioned in the receipt you will receive after your
                                                    booking. To be
                                                    on the safe side, before you make the large payment make sure you
                                                    contact
                                                    your bank to inform them that you don’t exceed your daily
                                                    spending limit and they don't flag the transaction as potential
                                                    fraud. If
                                                    you still need any help regarding your payment then please contact
                                                    our
                                                    customer service executive and they will be more than happy to
                                                    assist you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection