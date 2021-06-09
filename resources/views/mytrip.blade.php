@section('title','Mytrip - Triphomer')
@extends('layouts.home')
@section('content')
<div class="container">
    <form action="#" id="mytrip-form">
        <div class="row">
            <div class="col-lg-5 offset-lg-3">
                <div class="row">
                    <div class="col-lg-6 mytrip-social-icon custom-icon">
                        <a href="#"> <img src="assets/img/mytrip-google.png" alt="">Sign in with Google </a>
                    </div>

                    <div class="col-lg-6 mytrip-social-icon ">
                        <a href="#"><img src="assets/img/mytrip-fb.png.crdownload" alt="">Sign in with Facebook </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-3 mytrip-heading">
                <h6>Sign in, or find your trip by itinerary number </h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 offset-lg-3">
                <label for="email">Email*</label>
                <input type="email" name="email" class="form-control email-input">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 offset-lg-3 mytrip-custom-a">
                <label for="email">Password</label>
                <input type="test" name="password" class="form-control">
                <a href="#">Forget your password?</a>
            </div>

            <div class="col-lg-1 mytrip-or">
                <h6>OR</h6>
            </div>
            <div class="col-lg-2 mytrip-custom-a">
                <label for="email">Itinerary number</label>
                <input type="text" name="number" class="form-control">
                <a href="#">Forget itinerary number?</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 offset-lg-3 mytrip-btn">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>


        <div class="col-lg-4 offset-lg-3 mytrip-privacy-img">
            <i class="fa fa-key" aria-hidden="true"></i> &nbsp; <span> We keep it Private</span> <br>
            <i class="fa fa-share" aria-hidden="true"></i>&nbsp;<span> Share only with permission</span> <br>
            <i class="fa fa-unlock" aria-hidden="true"></i>&nbsp; <span> Quick sign in- no password</span>
        </div>


    </form>
</div>
    
@endsection