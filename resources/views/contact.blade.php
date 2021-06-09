@section('title','Contact Us - Triphomer')
@extends('layouts.home')
@section('content')
    <!-- Contact Form Section Start -->
    <section class="as-contact-us-section as-blue-background">
        <img src="assets/img/blue-background.jpg" alt="" class="img-fluid">
        <div class="as-about-blue-content">
            <h3 class="text-white">Contact Us</h3>
            <h4 class="text-white">24/7 Go Support & Help</h4>
            <p class="text-white">We are here to help Manage your booking or raise concern againest your booking</p>
        </div>

    </section>

    <section class="as-contact-section">
        <img src="assets/img/icon-background.png" alt="" class="img-fluid icon-backgroung-img">
        <div class="container">
            <div class="row  as-contact-main-box">
                <div class="col-lg-12 mx-auto contactUs-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="as-form-box">
                                <div class="form-title-wrap">
                                    <h3>We'd love to hear from you</h3>
                                    <p>Send us a message and we'll respond as soon as possible</p>
                                </div>

                                <div class="form-content ">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-box">
                                                    <label class="label-text">Name</label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Your name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-box">
                                                    <label class="label-text">Email</label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="email" name="email"
                                                            placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-box">
                                                    <label class="label-text">Phone</label>
                                                    <div class="form-group">

                                                        <input class="form-control" type="email" name="email"
                                                            placeholder="Email address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 ">
                                                <div class="input-box">
                                                    <label class="label-text">Message</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message"
                                                            placeholder="Write message"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <div class="input-box">
                                                            <div class="recapcha-box pb-4 d-flex align-items-center">
                                                                <label class="label-text flex-shrink-0 mr-3 mb-0">What
                                                                    is? 3 + 5
                                                                    =</label>
                                                                <input class="form-control" type="text" name="text"
                                                                    placeholder="Type answer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="as-btn-box">
                                                            <button type="button" class="as-send-btn">Send
                                                                Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="as-contact-description">
                                <h3>How Can We help</h3>
                                <p>Please select a topic below related to your inquiry. If you don't find what you need,
                                    fill out over contact form.</p>
                                <h6>Book a Demo</h6>
                                <p>Request a domo from one of our conversion specialists</p>
                                <h6>Get Inspired</h6>
                                <p>Discover the money way in which our customer use sleeknote.</p>
                                <h6>Become a partner</h6>
                                <p>jion our partner program and earn 25% recurring commissions</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 as-contact-right-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Get in Touch</h3>
                            </div>
                            <div class="form-content ">
                                <div class="address-book">
                                    <ul class="list-items contact-address">
                                        <li>
                                            <span> <i class="fas fa-street-view"></i>
                                                <h5>10926 Poblado Road, San Diego, CA 92127, USA</h5>
                                            </span>
                                        </li>
                                        <li>
                                            <span> <i class="fas fa-envelope"></i>
                                                <h5> info@triphomer.com</h5>
                                            </span>
                                        </li>
                                        <li>
                                            <span> <i class="fa fa-phone-alt"></i>
                                                <h5> 855-845-4400</h5>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="form-title-wrap">
                                    <h3 class="title">For Post Booking Queries</h3>
                                </div>
                                <div class="address-book">
                                    <ul class="list-items contact-address">
                                        <li>
                                            <span> <i class="fa fa-phone-alt"></i>
                                                <h5> 855-845-4400</h5>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/img/contact us ADS BANNER.jpg" alt="" class="img-fluid as-contact-banner-img" style="height:615px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="trusted-icon-box">
            <img src="assets/img/trustedby-logo.jpg" alt="" class="img-fluid">
            <h3>Trusted By</h3>
        </div>
    </section>
    <!-- Contact Form Section End -->
    
@endsection