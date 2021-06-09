<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no">
    <meta name="AUTHOR" content="TripHomer.com" />
    @if(isset($page->index))
    <meta name="ROBOTS" content="noodp, noydir" />
    @else
    <meta name="ROBOTS" content="noindex" />
    @endif
    <meta name="google-site-verification" content="lBOvBx0P0qKI0qljpgHQX1ROMMWg8Gcms0iFm-nIfRE">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="COPYRIGHT" content="©️ 2021 TripHomer" />
    
    <link rel="canonical" href="{{ Request::url() }}" />   

    <link rel="alternate" href="{{ Request::url() }}" hreflang="en" />
    @if(isset($page->seo_title))
    <title>{{ $page->seo_title }}</title>
    @else
    <title>@yield('title')</title>
    @endif


    @if(isset($page->seo_desc))
    <meta name="description"
        content="{{ $page->seo_desc }}" />
    @else
    <meta name="description"
        content="Book cheap flights to Las Vegas (LAS) with TripHomer.com. Grab low cost tickets & get best flight deals to Las Vegas. Book now and save big with us." />
    @endif
    
    <!-- Favicon -->
    <link rel="icon" href="http://triphomer.com/public/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/hotel.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/listing.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/booking-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/sitemap.css') }}">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NNFLVPX');</script>
<!-- End Google Tag Manager -->
</head>

<body>


    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="1"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!-- START HEADER AREA -->
    <nav class="navbar navbar-expand-lg navbar-light as-custom-navbar">

        <a href="{{ route('home') }}"><img src="{{ asset('/assets/img/triphomer-logo.svg') }}" alt="logo" class="img-fluid"></a>
        <a href="#" class="as-mobile-call">Call</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse as-custom-nav" id="navbarNav">
            <ul class="navbar-nav  as-custom-header-ul">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('flights') }}">Flights </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hotels') }}">Hotels</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vacation</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cars') }}">Cars</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cruises</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">More <i class="fa fa-angle-down"></i></a>
                    <ul class="as-ul-hover-nav">
                        <li>
                            <a href="#"> Activites 1</a>
                        </li>
                        <li>
                            <a href="#"> Activites 2</a>
                        </li>
                        <li>
                            <a href="#"> Activites 3</a>
                        </li>
                        <li>
                            <a href="#"> Activites 4</a>
                        </li>
                    </ul>
                </li>
                @guest
                <!-- <div class="main-menu-content">
                    <a href="{{ route('mytrip') }}" class="mytrip">My Trip</a>&nbsp;&nbsp;

                    <a href="{{ route('login') }}" class="theme-btn theme-btn-small theme-btn-transparent mr-1">Login </a>
                </div> -->
                @endguest
            </ul>





        </div>

        <div>
            <a href="#"> <img src="{{ asset('/assets/img/checkout-img/phone-img.png') }}" alt="24/7" class="as-tollfree-number"></a>


        </div>

    </nav>
    <!-- END HEADER AREA -->