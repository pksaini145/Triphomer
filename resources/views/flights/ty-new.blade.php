@section('title','Thank You - Triphomer')
@extends('layouts.home')
@section('content')
 <link rel="stylesheet" href="{{ asset('/assets/css/Confirmation.css') }}">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 @php
 $tripty = array(1 => 'ONEWAY',
        2 => 'ROUNDTRIP',
        3 => 'MULTICITY');
 
$fclass = array(1 => 'Economy',
2 => 'BasicEconomy',
3 => 'PremiumEconomy',
4 => 'Business',
5 => 'PremiumBusiness',
6 => 'First'
);

$Gender = array(1 => 'Male',
        2 => 'Female'
        );
$PaxType = array('ADT' => 'Adult',
        'INS' => 'Infant on Seat',
        'CHD' => 'Child',
        'SEN' => 'Senior ',
        'INF' => 'Infant on Lap',

        );
 @endphp

<div class="payment-page">
    <div class="container">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="paymnet-heading-section">
                            <h1><span>Booking</span> Confirmation</h1>
                            <p>Thank you for booking with us. Your payment has been submitted </p>
                            <p>You will soon receive  an email confirmation for <span class="color-red">E-ticket</span></p>
                        </div>



                        <div class="payment-info-row">
                            <ul>
                                <li><strong>PNR&nbsp;:</strong> <span class="blue-clr">{{$resultdatao->FlightTransactions->PNR}}</span></li>
                                <li><strong>Booked on&nbsp;:</strong>{{date('D, d M Y', strtotime($resultdatao->FlightTransactions->BookingDate))}}</li>

                            </ul>
                        </div>
                        <div class="payment-info-row  next-row">
                            <ul>

                                    <li><strong>Journey Type :</strong> <span> {{$tripty[$resultdatao->FlightDetails->TripType]}}</span></li>
                                <li><strong>Email&nbsp;:</strong>{{$resultdatao->FlightTransactions->Email}}</li>

                            </ul>
                        </div>
                        <div class="payment-info-row  next-row">

                            <ul>

                                <li><strong>Departure on&nbsp;:</strong>{{date('D, d M Y', strtotime($resultdatao->FlightDetails->DeptDate))}} </li>

                            </ul>

                        </div>


                        <div class="flight-details-box">
                            <h4>Flight Details</h4>
                           
                            @foreach($resultdatao->FlightBookingDetails as $flights)
                            <div class="inner-details">
                                
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="airline-logo">
                                                <img src="https://www.skyhikes.com/ImageApp/AirlineLogo/{{$flights->OperatedBy}}.png" alt="mobile-airline">
                                            </div>

                                            <div class="flight-info">{{$flights->AirlineName}} <span>Flight {{$flights->FlightNumber}}</span></div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="timing-destination">
                                                <span>{{date('h:i A D, M d, Y', strtotime($flights->DeptDateTime))}}</span>
                                                <span class="light-grey">{{$flights->OriginCity}}<strong class="blk-clr">({{$flights->OriginCode}})</strong></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="stoping">
                                                <span>{{ $fclass[$resultdatao->FlightDetails->BookingClass]}}</span>
                                            </div>
                                        </div>
                                        <div class="divider-blank"></div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="flight-duration"><span>Stops: <strong>{{$flights->TotalStops}}</strong></span></div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="timing-destination">
                                                <span><strong>{{date('h:i A D, M d, Y', strtotime($flights->ReturnDateTime))}}</span>
                                                <span class="light-grey">{{$flights->DestCity}}<strong class="blk-clr">({{$flights->DestCode}})</strong></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="flight-duration time-duration pull-right color"><span>Total Trip <strong>Time:02h:05m</strong></span></div>
                                        </div>




                            </div>
                            @endforeach


                        </div><!-- flight-details-box -->
                        

                       
                        
                        <div class="flight-details-box travel-info-parent">
                            <h4>Traveler Information</h4>
                            <div class="inner-details  overflow-small-devices">
                                <div class="traveler-info  width-modifier--small-devices">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <strong class="first-info"> Traveler Name</strong>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
                                        <strong> Gender</strong>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center--small-devices">
                                        <strong> Type</strong>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 text-right text-left--small-devices">
                                        <strong> D.O.B.</strong>
                                    </div>
                                </div><!-- traveler-info -->
                            @foreach($resultdatao->FlightTravellers as $traveller)
                            
                                        <div class="traveler-info bgnone  width-modifier--small-devices">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                                <span style="text-transform:capitalize"> {{++$loop->index}} . {{$traveller->FirstName}} {{$traveller->MiddleName}} {{$traveller->LastName}}</span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
                                                <span>{{$Gender[$traveller->Gender]}}</span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center--small-devices">
                                                <span> {{$PaxType[$traveller->PaxType]}}</span>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 text-right text-left--small-devices">
                                                <span> {{date('M d, Y',strtotime($traveller->DOB))}}</span>
                                            </div>
                                        </div>

                                <!-- traveler-info -->

                            
                            @endforeach
                            </div>


                        </div>
                        <!-- flight-details-box -->
                        <div class="flight-details-box travel-info-parent">
                            <h4>Price Details (USD)</h4>
                            <div class="inner-details overflow-small-devices">
                                <div class="traveler-info width-modifier--small-devices">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <strong>Traveler (s)    </strong>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <strong> Base Price </strong>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center--small-devices">
                                        <strong> Taxes &amp; Fees   </strong>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right text-left--small-devices">
                                        <strong> Sub Total</strong>
                                    </div>
                                </div>
                                @php
                                $totalprice=0;
                                @endphp
                                @foreach($resultdatao->FlightPriceDetails as $FlightPriceDetails)

                                @php
                                $totalprice=$totalprice+ $FlightPriceDetails->TotalAmount * $FlightPriceDetails->PaxCount;
                                @endphp

                                        <div class="traveler-info bgnone width-modifier--small-devices">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <strong>{{$FlightPriceDetails->PaxCount}} {{$PaxType[$FlightPriceDetails->PaxType]}}</strong>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <strong>${{$FlightPriceDetails->BaseFare}}  </strong>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center--small-devices">
                                                <strong> ${{$FlightPriceDetails->TotalTax}}</strong>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right text-left--small-devices">
                                                <strong> ${{$FlightPriceDetails->TotalAmount * $FlightPriceDetails->PaxCount}}</strong>
                                            </div>
                                        </div>
                                        @endforeach
                                <div class="traveler-info bgnone dark-color">
                                    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                                        <strong>Total Price</strong>
                                    </div>
                                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                                        <strong></strong>
                                    </div>
                                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                                        <strong></strong>
                                    </div>
                                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-right">
                                        <strong>${{$totalprice}}</strong>
                                    </div>
                                </div>

                                <!--Modifiaction done by Bappi for small devices-->
                                <div class="traveler-info bgnone dark-color width-modifier--small-devices">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-4 hidden-lg hidden-md"></div>
                                        <div class="col-sm-3 col-xs-3 hidden-lg hidden-md"></div>
                                        <div class="col-sm-3 col-xs-3 text-right hidden-md hidden-lg text-center--small-devices"> <strong>Total Price</strong></div>
                                        <div class="col-sm-2 col-xs-2 hidden-md hidden-lg text-right text-left--small-devices">
                                            <strong>${{$totalprice}}</strong>
                                        </div>
                                    </div>


                                </div>
                                <!-- End of Modifiaction done by Bappi for small devices-->
                                <!-- traveler-info -->
                                <div class="traveler-info bgnone width-modifier--small-devices">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <span>Charged On Credit Card</span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                        <span>Visa ****1111</span>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-right">
                                        <strong>US  ${{$totalprice}}</strong>
                                    </div>
                                </div><!-- traveler-info -->
                                  

                            </div>
                            

                        </div><!-- flight-details-box -->
                    </div>
                    
                </div>
                </div>
@endsection