<section class="directory cheap_ticket">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h4 class="title curve-shape pb-3 mt-4">Find International Flights by Destination</h4>
                <ul class="directory__list">
                     @if(isset($flight_destinations))
                     @foreach($flight_destinations as $flightl)
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="{{ route('flights', $flightl->slug)}}">{{ $flightl->heading }}</a></li>
                    @endforeach
                    @else
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to Fort
                            Myers</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Phoenix</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Dallas</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to Ft
                            Lauderdale </a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to San
                            Diego</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Chicago</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Atlanta</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to San
                            Francisco</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Miami</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Denver</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to San
                            Juan</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Orlando</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Honolulu</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Seattle</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to Las
                            Vegas</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to Los
                            Angeles</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to
                            Tampa</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Flights to New
                            York</a></li>
                    @endif
                </ul>
            </div>
            <div class="col-12 col-sm-6">
                <!-- <h4 class="title curve-shape pb-3 mt-4">Find Cheap Tickets by Airline</h4> -->
                <h4 class="title curve-shape pb-3 mt-4">Find Domestic Flights by Destination</h4>
                <ul class="directory__list">
                    @if(isset($flight_destinations2))
                     @foreach($flight_destinations2 as $flight2)
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="{{ route('flights', $flight2->slug)}}">{{ $flight2->heading }}</a></li>
                    @endforeach
                    @else
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Philippine
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Spirit
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Airasia Flight</a>
                    </li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Latam
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">American
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Emirates
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Norwegian
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Qatar
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Frontier
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">United
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">India Flight</a>
                    </li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Volaris Flight</a>
                    </li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Saudia Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Alaska
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Canada Flight</a>
                    </li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Caribbean
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">Turkish
                            Flight</a></li>
                    <li class="directory__col-4"><a class="directory__link" target="_blank" href="#">China
                            Flight</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <hr class="my-4">
    </div>
</section>