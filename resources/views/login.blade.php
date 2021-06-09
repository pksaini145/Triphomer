@section('title','Login - Triphomer')
@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto mt-5 mb-4">
            <div class="row">
                <div class="col-lg-5">
                    <img src="assets/img/login-img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7 as-login-form">
                    <div class="row">
                        <div class="col-lg-6 as-login-social-icon">
                            <svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg><!-- <i class="fab fa-facebook"></i> --> <span> Sign in with Facebook</span>
                        </div>
                        <div class="col-lg-6 as-login-social-icon">
                            <svg class="svg-inline--fa fa-google-plus fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm-70.7 372c-68.8 0-124-55.5-124-124s55.2-124 124-124c31.3 0 60.1 11 83 32.3l-33.6 32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9 0-77.2 35.5-77.2 78.1s34.2 78.1 77.2 78.1c32.6 0 64.9-19.1 70.1-53.3h-70.1v-42.6h116.9c1.3 6.8 1.9 13.6 1.9 20.7 0 70.8-47.5 121.2-118.8 121.2zm230.2-106.2v35.5H372v-35.5h-35.5v-35.5H372v-35.5h35.5v35.5h35.2v35.5h-35.2z"></path></svg><!-- <i class="fab fa-google-plus"></i> --> <span>Sign in with Google</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 as-welocme-login">
                            <h3>Welcome to Login Page</h3>
                        </div>
                    </div>

<form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="email" name="email" class="form-control as-login-input @error('email') is-invalid @enderror" placeholder="Email Id" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="password" name="password" class="form-control as-login-input @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6">
                        <button type="submit" class="btn as-login-btn">login In</button>
                        </div>

                        <div class="col-lg-6 as-create-new-account">
                            <a href="#">Create a new account</a>
                        </div>
                    </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12">
                            <span> <svg class="svg-inline--fa fa-key fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 176.001C512 273.203 433.202 352 336 352c-11.22 0-22.19-1.062-32.827-3.069l-24.012 27.014A23.999 23.999 0 0 1 261.223 384H224v40c0 13.255-10.745 24-24 24h-40v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-78.059c0-6.365 2.529-12.47 7.029-16.971l161.802-161.802C163.108 213.814 160 195.271 160 176 160 78.798 238.797.001 335.999 0 433.488-.001 512 78.511 512 176.001zM336 128c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"></path></svg><!-- <i class="fas fa-key"></i> --> We keep it Private</span><br>
                            <span> <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user"></i> --> Share only with Permission</span><br>
                            <span> <svg class="svg-inline--fa fa-unlock-alt fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="unlock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zM264 408c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48z"></path></svg><!-- <i class="fas fa-unlock-alt"></i> --> Quick sign in- no Password</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
    
@endsection