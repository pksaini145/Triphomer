@section('title','Thank You - Triphomer')
@extends('layouts.home')
@section('content')
<section class="as-main-booking-box as-main-booking-heading">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">

                        <div class="col-lg- mx-auto">
                            <div class="as-thanku-heading">
                                <h3> <span class="as-thanku">Thank you </span> for booking with us</h3>
                                <p>You're on the final step to book your flight</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-lg-8">
                <p>you must have received a confirmation email at {{$resultdatao->FlightTransactions->Email}}.</p>
                <p>Please take some time to review your car hire voucher to ensure you have everything you need.</p>
            </div>

            <div class="col-lg-4 as-booking-accepted">
                <h6>Your booking is accepted.</h6>
                @php
                $bkid = $resultdatao->FlightBookingDetails[0]->ID;
                @endphp
                <span>Book number is : <b>{{ $bkid }}</b></span>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="as-print-email-btn">
                            <li> <a href="#"><button type="button" class="as-print-btn">Print this Page</button></a></li>
                            <li> <a href="#"><button type="button" class="as-email-btn">Email itinerary</button></a></li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 as-car-detal-heading">
                <small>Flight confirmation</small>
                <h3>Customer Details</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Seat Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>PhoneNo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{$resultdatao->FlightBillingDetails->CCHolderName}}</td>
                            <td>{{$resultdatao->FlightTransactions->Email}}</td>
                            <td>{{$resultdatao->FlightBillingDetails->BillingPhone}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 as-car-detal-heading">
                <h3>Flight Contact Information</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Provided by</th>
                            <th>PhoneNo</th>
                            <th>Confirmation no.</th>
                            <th>Booking Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>National flight</td>
                            <td>1-888-227-3427</td>
                            <td>1078654count</td>
                            <td>3837564321</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 as-car-detal-heading">
                <h3>Your flight Checklist</h3>
                <div class="col-lg-12 as-travel-checlst">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4> <i class="fa fa-check"></i><span> Mandatory health declaration</span></h4>
                            <h4><i class="fa fa-check"></i><span> Baggage allowance</span></h4>
                            <h4><i class="fa fa-check"></i><span> Generate baggage tag</span>
                            </h4>
                        </div>
                        <div class="col-lg-6">
                            <h4><i class="fa fa-check"></i><span> Printed copy of boarding pass and baggage tag</span></h4>
                            <h4><i class="fa fa-check"></i><span> Reach 2 hours early</span></h4>
                            <h4><i class="fa fa-check"></i><span> Personal hygiene measures</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-12 as-booking-heading">
            <h6>Flight Booking Details</h6>

        </div>


        <div class="col-lg-12 as-car-booking-detail">
            <h6 class="as-car">Flight</h6>
            <h1>Flydubai</h1>
            <p>Class : {{$resultdatao->FlightDetails->BookingClass}}</p>
                @foreach($resultdatao->FlightBookingDetails as $value)
            <div class="row mt-3">
                <div class="col-lg-3">
                    <img src="{{$value->OperatedBy}}" alt="{{$value->OperatedBy}}" class="img-fluid">
                </div>
              
                <div class="col-lg-3 as-car-pick-up">
                    <span> <i class="fa fa-location-arrow"></i> Pick Up:</span>
                    <p>{{$value->OriginCity}}, {{$value->OriginAirport}}</p>
                    <h6>{{$value->DeptDateTime}}</h6>
                    <h6>{{$value->DeptDateTime}}</h6>
                    
                </div>
                <div class="col-lg-3 as-car-pick-up">
                    <span> <i class="fa fa-location-arrow"></i> Drop Off:</span>
                    <p>{{$value->DestCity}}, {{$value->DestAirport}}</p>
                    <h6>{{$value->ReturnDateTime}}</h6>
                    <h6>{{$value->ReturnDateTime}}</h6>
                    
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <ul class="inner-seg">
                            <li class="nSpace text-right col-xs-6 col-sm-12">
                                {{ count($resultdatao->FlightBookingDetails) }} Stops

                            </li>
                            <!-- <span class="tech-stopage">ORD, ATL </span> -->
                            <li class="nSpace text-right col-xs-6 col-sm-12"><span class="list-ico hidden-xs"></span><span class="hidden-xs">Trip Time :</span> {{$value->Duration}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <h6 class="as-car">Currency: USD</h6>
            <table class="table mt-3">

                <tbody>
                    <tr>
                        <td>Total Actual Fire</td>
                        <td>(1*$1000)</td>
                        <td>$1000.00</td>

                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>$100</td>
                        <td>$100</td>

                    </tr>
                    <tr>
                        <td>Taxes & Fees</td>
                        <td></td>
                        <td>$76.32</td>

                    </tr>
                    <tr class="as-car-total-amount">
                        <td>Total</td>
                        <td></td>
                        <td>$976.6</td>

                    </tr>

                </tbody>
            </table>


        </div>
    </div>
@endsection