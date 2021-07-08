<!--  START FOOTER AREA -->
<section class="footer-area section-bg padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 ">
                <div class="footer-item">
                    <div class="footer-logo pb-1">
                        <a href="index" class="foot__logo"><img src="{{ asset('/assets/img/triphomer-logo.svg') }}" alt="logo"
                                class="img-fluid"></a>
                    </div>

                    <p class="footer__desc text-justify" style="font-size:13px;">Trip Homer is the fastest-growing
                        Flight, Hotel, Car rental, and Cruise booking portal with its footprints all around the
                        world.</p>

                </div>

            </div>

            <div class="col-lg-3 col-4 ">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 ">About </h4>
                    <ul class="list-items list--items">
                        <li> <a href="#">My Blog</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                        <!-- <li> <a href="{{ route('mytrip') }}">My Trip</a></li>
                        <li> <a href="{{ route('login') }}">Login </a></li> -->
                    </ul>
                </div>

            </div>

            <div class="col-lg-3 col-4 ">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 ">Legal</h4>
                    <ul class="list-items list--items">
                        <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('help') }}">Help</a></li>
                        <li><a href="#">Taxes &amp; Fees</a></li>

                        <li><a href="#">Cookie Policy</a></li>

                    </ul>
                </div>

            </div>

            <div class="col-lg-3 col-4 ">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 ">Site Directories</h4>
                    <ul class="list-items list--items">
                        <li class="directory__item"><a class="directory__link"  href="{{ route('flight_destinations') }}">Flight
                                Destinations</a></li>
                        <li class="directory__item"><a class="directory__link"  href="{{ route('hotel_destinations') }}">Hotel
                                Destinations</a></li>
                        <li class="directory__item"><a class="directory__link" target="_blank" href="#">Airports</a>
                        </li>
                        <li class="directory__item"><a class="directory__link"  href="{{ route('airlines') }}">Airlines</a>
                        </li>
                        <li class="directory__item"><a class="directory__link"  href="{{ route('sitemap') }}">Sitemap</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="row align-items-center">

            <div class="col-lg-12">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="facebook-f" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg><!-- <i class="fab fa-facebook-f"></i> --></a></li>
                        <li><a href="#"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="twitter" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg><!-- <i class="fab fa-twitter"></i> --></a></li>
                        <li><a href="#"><svg class="svg-inline--fa fa-instagram fa-w-14" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="instagram" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg><!-- <i class="fab fa-instagram"></i> --></a></li>
                        <li><a href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true"
                                    focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                    </path>
                                </svg><!-- <i class="fab fa-linkedin-in"></i> --></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>




</section>
<section class="as-payment-icon">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right-content d-flex align-items-center justify-content-center">
                    <img src="{{ asset('/assets/img/master card.png') }}" alt="">
                    <img src="{{ asset('/assets/img/visa.png') }}" alt="">
                    <img src="{{ asset('/assets/img/AMC.png') }}" alt="">
                    <img src="{{ asset('/assets/img/discover.png') }}" alt="">
                    <img src="{{ asset('/assets/img/Diners club.png') }}" alt="">
                    <img src="{{ asset('/assets/img/PP.png') }}" alt="">
                </div>
            </div>
        </div>
</section>

<section class="as-copyright-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="copy-right ">
                    <p class="copy__desc">
                        &copy; {{ date('Y') }} triphomer.com
                </div>
            </div>
            <div class="col-lg-8 as-footer-address">
                <p>
                    <i class="fa fa-map-marker-alt"></i> 10926 Poblado Road, San Diego, CA 92127, USA
                </p>
            </div>
        </div>
    </div>
</section>

<!--  End FOOTER AREA -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="fas fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fas fa-times"></span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fas fa-times"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="fa fa-user form-icon"></span>
                                    <input class="form-control" type="text" name="text"
                                        placeholder="Type your username">
                                </div>
                            </div>
                            <!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="fa fa-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text"
                                        placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.php">Forgot Password?</a>
                                    </p>
                                </div>
                            </div>
                            <!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="bg-6 text-white"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="bg-5 text-white"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal-popup -->


<!-- Template JS Files -->
<script src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/assets/js/moment.min.js') }}"></script>
<script src="{{ asset('/assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.countTo.min.js') }}"></script>
<script src="{{ asset('/assets/js/animated-headline.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('/assets/js/quantity-input.js') }}"></script>
<script src="{{ asset('/assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>
<script src="{{ asset('/assets/js/listing.js') }}"></script>
<script src="{{ asset('/assets/js/airports.js') }}"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNFLVPX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.originair', function(event) {
    var originval = $(this).html();
    var originCode = $(this).attr('for');
    $('#originCode').val(originval).attr('origincode', originCode);
    $('#originCodeo').val(originCode);
    $('.originCodesreach').css('display', 'none');
});
$(document).on('click', '.toriginairtest', function(event) {
    var originval = $(this).html();
    var originCode = $(this).attr('for');
    $('#toriginCode').val(originval);
    $('#toriginCodeo').val(originCode);
    $('.toriginCodesreach').css('display', 'none');
});
$(document).on('click', '.toriginair', function(event) {
    var originval = $(this).html();
    var originCode = $(this).attr('for');
    $('#destCode').val(originval);
    // $('#toriginCodeo').val(originCode);
    $('.destiCodesreach').css('display', 'none');
});
///// to every word capitalise string //
function capitalize(input) {
    var words = input.split(' ');
    var CapitalizedWords = [];
    words.forEach(element => {
        CapitalizedWords.push(element[0].toUpperCase() + element.slice(1, element.length));
    });
    return CapitalizedWords.join(' ');
}
////////////////////////////////////////

$(document).on('keyup', '#originCode', function(event) {
    var originCode = $(this).val();
    var originCoden = originCode.length;
    var outputdata = [];
    if (originCoden > 2) {
        if (originCoden == 3) {
            var originCode = originCode.toUpperCase();
            myairports.filter(function(person) {
                if (person.iata.indexOf(originCode) > -1) {
                    outputdata.push(person);
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='originair'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.originCodesreach').html(html);
        } else {
            var originCode = capitalize(originCode);
            myairports.filter(function(person) {
                if (person.name.indexOf(originCode) > -1 || person.city.indexOf(originCode) > -1) {
                    outputdata.push(person); 
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='originair'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.originCodesreach').html(html);
        }
        $('.originCodesreach').css('display', 'block');
    }
});

$(document).on('keyup', '#originCode12', function(event) {
            var originCode = $(this).val();
      var originCoden = originCode.length;
      if(originCoden>2){
         var _token   = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        url: "{{route('airports')}}",
        type:"GET",
        data:{
          name:originCode,
          _token: _token
        },
        success:function(response){
          console.log(response);
          if(response) {
            data = JSON.parse(response);
        var html = "";
    for (var i = 0; i < data.length; i++) {
       
       
        html = html + "<li for='" + data[i].iata_code + "' class='originair'>"+data[i].name+"</li>";
    };
            console.log(html);
            // $('#flyto').html(html);
            $('ul.originCodesreach').html(html);
            // $("#ajaxform")[0].reset();
          }
        },
       });
            
            $('.originCodesreach').css('display','block');
        }
        });

$(document).on('keyup', '#toriginCode', function(event) {
    var originCode = $(this).val();
      var originCoden = originCode.length;
      var outputdata = [];
      
      if(originCoden>2){

        if (originCoden == 3) {
            var originCode = originCode.toUpperCase();
            myairports.filter(function(person) {
                if (person.iata.indexOf(originCode) > -1) {
                    outputdata.push(person);
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='toriginairtest'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.toriginCodesreach').html(html);
        } else {
            var originCode = capitalize(originCode);
            myairports.filter(function(person) {
                if (person.name.indexOf(originCode) > -1 || person.city.indexOf(originCode) > -1) {
                    outputdata.push(person); 
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='toriginairtest'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.toriginCodesreach').html(html);
        }

    
            
            $('.toriginCodesreach').css('display','block');
        }
        });

        // $(document).on('click', '.destair', function(event) {
        //     var destval = $(this).html();
        //     var destCode = $(this).attr('for');
        //     $('#destCode').val(destval);
        //     $('#destCodeo').val(destCode);
        //      $('.destiCodesreach').css('display','none');


        // });
 $(document).on('click', '.tdestair', function(event) {
    var destval = $(this).html();
    var destCode = $(this).attr('for');
    $('#tdestCode').val(destval);
    $('#tdestCodeo').val(destCode);
     $('.tdestiCodesreach').css('display','none');
});
$(document).on('keyup', '#destCode', function(event) {
            var destCode = $(this).val();
      var destCoden = destCode.length;
      var outputdata = [];
      if(destCoden>2){
    if (destCoden == 3) {
            var destCode = destCode.toUpperCase();
            myairports.filter(function(person) {
                if (person.iata.indexOf(destCode) > -1) {
                    outputdata.push(person);
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='toriginair'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.destiCodesreach').html(html);
        } else {
            var destCode = capitalize(destCode);
            myairports.filter(function(person) {
                if (person.name.indexOf(destCode) > -1 || person.city.indexOf(destCode) > -1) {
                    outputdata.push(person); 
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='toriginair'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.destiCodesreach').html(html);
        }
            
            $('.destiCodesreach').css('display','block');
        }
        });


$(document).on('keyup', '#tdestCode', function(event) {
    var destCode = $(this).val();
      var destCoden = destCode.length;
      var outputdata = [];
      
      if(destCoden>2){

        if (destCoden == 3) {
            var destCode = destCode.toUpperCase();
            myairports.filter(function(person) {
                if (person.iata.indexOf(destCode) > -1) {
                    outputdata.push(person);
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='tdestair'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.tdestiCodesreach').html(html);
        } else {
            var destCode = capitalize(destCode);
            myairports.filter(function(person) {
                if (person.name.indexOf(destCode) > -1 || person.city.indexOf(destCode) > -1) {
                    outputdata.push(person); 
                }
            });
            var html = '';
            for (var i = 0; i < outputdata.length; i++) {
                html = html + "<li for='" + outputdata[i].iata + "' class='tdestair'>" + outputdata[i].iata + '-' + outputdata[i].name + ',' + outputdata[i].city + ',' + outputdata[i].country + "</li>";
            };
            $('ul.tdestiCodesreach').html(html);
        }

            
            $('.tdestiCodesreach').css('display','block');
        }
        });
     
$(document).on('click','.listing-filter',function(){
    var way = [];
    $('.listing-filter:checked').each(function() {
   way.push(this.value);

});
// console.log(way);
    var output12 = [];
    var filtered = flights.filter(filterFlight);

    function filterFlight(fvalue){
     if (fvalue.FlightSegmentDetails.OutBoundSegment.length == way[0] || fvalue.FlightSegmentDetails.OutBoundSegment.length == way[1] || fvalue.FlightSegmentDetails.OutBoundSegment.length == way[2]) {
      output12.push(fvalue);
     }
    }
    console.log(output12.length)
    $('#totalflights').html(output12.length);
    
    var listing_data = create_listing_dom(output12);
    
$('#flightresult').html(listing_data);
})

function time_converter(timeString){
var H = +timeString.substr(0, 2);
var h = (H % 12) || 12;
var ampm = H < 12 ? "AM" : "PM";
timeString = h + timeString.substr(2, 3) + ampm;
return timeString;
}

function create_listing_dom(output12){
    var outputdatht ='';
    $.each(output12,function(k,v){
      outputdatht +'<div class="row"><div class="col-lg-12 as-ticket-box"><div class="row">'; 
      $.each(v.FlightSegmentDetails.OutBoundSegment,function(ko,vo){
        // console.log(vo.MarketingCarrier.AirlineCode); 
         outputdatht = outputdatht +'<div class="col-lg-12 col-md-12 col-12 as-ticket-under-box"><div class="row"><div class="col-lg-3 as-listing-img-box"><img src="https://skyhikes.com/ImageApp/AirlineLogo/'+vo.MarketingCarrier.AirlineCode+'.png" alt="'+vo.MarketingCarrier.AirlineName+'" width="60" height="35"><div class="as-ticket-img-heading"><h6>'+vo.MarketingCarrier.AirlineName+'</h6><p>Economy</p></div></div><div class="col-lg-3 col-md-4 col-6"><ul class="inner-seg"><li><strong class="city">'+vo.Origin+', </strong><span class="city-name hidden-xs">'+vo.OriginCity+'</span></li><li><time class="time">'+time_converter(vo.DepartureTime)+' | </time><span class="date hidden-xs">'+vo.DepartureDate+'</span></li></ul></div> <div class="col-lg-3 col-md-4 col-6"> <ul class="inner-seg"> <li> <strong class="city"> '+vo.Destination+', </strong><span class="city-name hidden-xs"> '+vo.DestinationCity+' </span> </li> <li><time class="time">'+time_converter(vo.ArrivalTime)+' | </time> <span class="date hidden-xs"> '+vo.ArrivalDate+'</span></li> </ul> </div> <div class="col-lg-3 col-md-4 text-right"> <ul class="inner-seg"> <li class="nSpace text-right col-xs-6 col-sm-12"> '+v.FlightSegmentDetails.OutBoundSegment.length+' Stops </li> <li class="nSpace text-right col-xs-6 col-sm-12"><span class="list-ico hidden-xs"></span><span class="hidden-xs">Trip Time :</span> '+vo.FlightDuration+'</li> </ul> </div> </div> </div>';
      })
      $.each(v.FlightSegmentDetails.InBoundSegment,function(rko,rvo){
        outputdatht = outputdatht +'<div class="returnflights"><div class="col-lg-12 col-md-12 col-12 as-ticket-under-box"><div class="row"><div class="col-lg-3 as-listing-img-box"><img src="https://skyhikes.com/ImageApp/AirlineLogo/'+rvo.MarketingCarrier.AirlineCode+'.png" alt="'+rvo.MarketingCarrier.AirlineName+'" width="60" height="35"><div class="as-ticket-img-heading"<h6>'+rvo.MarketingCarrier.AirlineName+'</h6><p>Economy</p></div></div><div class="col-lg-3 col-md-4 col-6"> <ul class="inner-seg"> <li> <strong class="city"> '+rvo.Origin+', </strong> <span class="city-name hidden-xs"> '+rvo.OriginCity+' </span> </li> <li> <time class="time">'+time_converter(rvo.DepartureTime)+' | </time> <span class="date hidden-xs"> '+rvo.DepartureDate+' </span> </li> </ul> </div><div class="col-lg-3 col-md-4 col-6"> <ul class="inner-seg"> <li> <strong class="city"> '+rvo.Destination+', </strong><span class="city-name hidden-xs"> '+rvo.DestinationCity+' </span> </li> <li><time class="time">'+time_converter(rvo.ArrivalTime)+' | </time> <span class="date hidden-xs"> '+rvo.ArrivalDate+'</span></li> </ul> </div><div class="col-lg-3 col-md-4 text-right"> <ul class="inner-seg"> <li class="nSpace text-right col-xs-6 col-sm-12"> '+v.FlightSegmentDetails.InBoundSegment.length+' Stops </li> <li class="nSpace text-right col-xs-6 col-sm-12"><span class="list-ico hidden-xs"></span><span class="hidden-xs">Trip Time :</span> '+rvo.FlightDuration+'</li> </ul> </div></div></div></div>';
      })
      outputdatht = outputdatht +'<div class="col-lg-12 as-ticket-book-box"> <div class="col-lg-12 select-trip"></div> <div class="row"> <div class="col-lg-2 col-md-4 col-6 itinerary-details"> <div class="dropdown"> <button class="btn dropdown-toggle as-custom-itinerart-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Itinerary Details </button> <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div> </div> </div> <div class="col-lg-3 col-md-4 col-6 cancellation-text"> <svg class="svg-inline--fa fa-check fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg><span class="free-cancellation"> Free Cancellation </span> <svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg> </div> <div class="col-lg-5 as-airline-booking-detail"> <li class="airline-breakup col-lg-7"> <h4><span class="total-price">$'+v.TotalGDSFareV2.toFixed(2)+'</span></h4> <small>Price Per Person (Incl fee)</small> </li> <li class="book-now-only">Book Now only <strong class="seats">'+v.MinSeatAvailableForContract+' seats </strong> left at the price!</li> </div> <div class="col-lg-2 listing-book-now-btn"> <a href="http://localhost/triphomer/public/flight_payment/'+v.ContractID+'?CacheKey='+CacheKey+'"> <button type="button" class="btn btn-block ">Book Now</button></a> </div> </div> </div></div></div></div>';
    })
    return outputdatht;
}

 
$("#slider-range-time-cus").slider({
    range: true,
    min: 0,
    max: 1440,
    step: 15,
    values: [@if(isset($filterbar['departmin'])) {{$filterbar['departmin']}} @else {{0}} @endif, @if(isset($filterbar['departmax'])) {{$filterbar['departmax']}} @else {{1440}} @endif],
    slide: function (e, ui) {
        // console.log(ui);
        console.log(ui.values);
        var flightsresult = filterByProperty(flights, "DepartureTime", ui.values[0],ui.values[1]);
        // console.log(flightsresult);
         var listing_data = create_listing_dom(flightsresult);
    
$('#flightresult').html(listing_data);
        // console.log(byName.length);
        $('#totalflights').html(flightsresult.length);
        var hours1 = Math.floor(ui.values[0] / 60);
        var minutes1 = ui.values[0] - (hours1 * 60);

        if (hours1.length == 1) hours1 = '0' + hours1;
        if (minutes1.length == 1) minutes1 = '0' + minutes1;
        if (minutes1 == 0) minutes1 = '00';
        if (hours1 >= 12) {
            if (hours1 == 12) {
                hours1 = hours1;
                minutes1 = minutes1 + " PM";
            } else {
                hours1 = hours1 - 12;
                minutes1 = minutes1 + " PM";
            }
        } else {
            hours1 = hours1;
            minutes1 = minutes1 + " AM";
        }
        if (hours1 == 0) {
            hours1 = 12;
            minutes1 = minutes1;
        }



        $('.slider-time').html(hours1 + ':' + minutes1);

        var hours2 = Math.floor(ui.values[1] / 60);
        var minutes2 = ui.values[1] - (hours2 * 60);

        if (hours2.length == 1) hours2 = '0' + hours2;
        if (minutes2.length == 1) minutes2 = '0' + minutes2;
        if (minutes2 == 0) minutes2 = '00';
        if (hours2 >= 12) {
            if (hours2 == 12) {
                hours2 = hours2;
                minutes2 = minutes2 + " PM";
            } else if (hours2 == 24) {
                hours2 = 11;
                minutes2 = "59 PM";
            } else {
                hours2 = hours2 - 12;
                minutes2 = minutes2 + " PM";
            }
        } else {
            hours2 = hours2;
            minutes2 = minutes2 + " AM";
        }

        $('.slider-time2').html(hours2 + ':' + minutes2);
    }
});

$("#slider-range-time-cusr").slider({
    range: true,
    min: 0,
    max: 1440,
    step: 15,
    values: [@if(isset($filterbar['rdepartmin'])) {{$filterbar['rdepartmin']}} @else {{0}} @endif, @if(isset($filterbar['rdepartmax'])) {{$filterbar['rdepartmax']}} @else {{1440}} @endif],
    slide: function (e, ui) {
        // console.log(ui);
        console.log(ui.values);
        var flightsresult = filterByPropertyr(flights, "DepartureTime", ui.values[0],ui.values[1]);
        // console.log(flightsresult);
         var listing_data = create_listing_dom(flightsresult);
    
$('#flightresult').html(listing_data);
        // console.log(byName.length);
        $('#totalflights').html(flightsresult.length);
        var hours1 = Math.floor(ui.values[0] / 60);
        var minutes1 = ui.values[0] - (hours1 * 60);

        if (hours1.length == 1) hours1 = '0' + hours1;
        if (minutes1.length == 1) minutes1 = '0' + minutes1;
        if (minutes1 == 0) minutes1 = '00';
        if (hours1 >= 12) {
            if (hours1 == 12) {
                hours1 = hours1;
                minutes1 = minutes1 + " PM";
            } else {
                hours1 = hours1 - 12;
                minutes1 = minutes1 + " PM";
            }
        } else {
            hours1 = hours1;
            minutes1 = minutes1 + " AM";
        }
        if (hours1 == 0) {
            hours1 = 12;
            minutes1 = minutes1;
        }



        $('.slider-timer').html(hours1 + ':' + minutes1);

        var hours2 = Math.floor(ui.values[1] / 60);
        var minutes2 = ui.values[1] - (hours2 * 60);

        if (hours2.length == 1) hours2 = '0' + hours2;
        if (minutes2.length == 1) minutes2 = '0' + minutes2;
        if (minutes2 == 0) minutes2 = '00';
        if (hours2 >= 12) {
            if (hours2 == 12) {
                hours2 = hours2;
                minutes2 = minutes2 + " PM";
            } else if (hours2 == 24) {
                hours2 = 11;
                minutes2 = "59 PM";
            } else {
                hours2 = hours2 - 12;
                minutes2 = minutes2 + " PM";
            }
        } else {
            hours2 = hours2;
            minutes2 = minutes2 + " AM";
        }

        $('.slider-timer2').html(hours2 + ':' + minutes2);
    }
});
$('button.btn.as-reset-filter-btn.btn-block').click(function(){
    $("#slider-range-time-cus").slider({
    values:[@if(isset($filterbar['departmin'])) {{$filterbar['departmin']}} @else {{0}} @endif, @if(isset($filterbar['departmax'])) {{$filterbar['departmax']}} @else {{1440}} @endif]
});
$("#slider-range-time-cusr").slider({
    values:[@if(isset($filterbar['rdepartmin'])) {{$filterbar['rdepartmin']}} @else {{0}} @endif, @if(isset($filterbar['rdepartmax'])) {{$filterbar['rdepartmax']}} @else {{1440}} @endif]
});
$('.custom-checkbox.listing-filter').prop( "checked", true );
var listing_data = create_listing_dom(flights);
$('#flightresult').html(listing_data);
        // console.log(byName.length);
 $('#totalflights').html(flights.length);
})
 function filterByProperty(array, prop, min,max){
    var filtered = [];
    for(var i = 0; i < array.length; i++){
        var obj = array[i];
        // console.log(obj);
        for(var key in obj.FlightSegmentDetails.OutBoundSegment){
            // console.log(key);
            if(typeof(obj.FlightSegmentDetails.OutBoundSegment[key] == "object")){
                var item = obj.FlightSegmentDetails.OutBoundSegment[key];
                var itemor = obj;
                // console.log(key);
                // time_into_min(item[prop]);
                if(key == 0){
                if(time_into_min(item[prop]) >= min && time_into_min(item[prop]) <= max){
                    // console.log(time_into_min(item[prop]));
                    // console.log(item[prop]);
                    // console.log(item);
                    // time_into_min(value);
                    filtered.push(itemor);
                }
            }
            }
        }

    }    

    return filtered;

}

function filterByPropertyr(array, prop, min,max){
    var filtered = [];
    for(var i = 0; i < array.length; i++){
        var obj = array[i];
        // console.log(obj);
        for(var key in obj.FlightSegmentDetails.InBoundSegment){
            // console.log(key);
            if(typeof(obj.FlightSegmentDetails.InBoundSegment[key] == "object")){
                var item = obj.FlightSegmentDetails.InBoundSegment[key];
                var itemor = obj;
                // console.log( time_into_min(item[prop]));
              
                if(key == 0){
                if(time_into_min(item[prop]) >= min && time_into_min(item[prop]) <= max){
                    console.log(time_into_min(item[prop]));
                    // console.log(item[prop]);
                    // console.log(item);
                    // time_into_min(value);
                    filtered.push(itemor);
                }
            }
            }
        }

    }    

    return filtered;

}

function time_into_min(time){
    var hms = time;   
    var a = hms.split(':');
    var minutes = (+a[0]) * 60  + (+a[1]) ;
     return minutes;
}
</script>
</body>

</html>