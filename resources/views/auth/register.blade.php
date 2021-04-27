@extends('layouts.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/home_banner_bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Register</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="{{URL::asset('/')}}">Home</a> </li>
                        <li><span>Register</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION LOGIN --> 
<section class="bg-white">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="authorize_box">
                	<div class="title_default_dark title_border text-center">
                    	<h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Welcome</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Sign up to your account</p>
                    </div>
                    <div class="field_form authorize_form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            	<input type="text" class="form-control @error('name') is-invalid @enderror" required=""
                                 placeholder="User Name" name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        	<div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            	<input type="email" class="form-control @error('email') is-invalid @enderror" required=""
                                 placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                            	<input type="password" class="form-control @error('password') is-invalid @enderror" required="" placeholder="Password" name="password" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                            	<input type="password" class="form-control" required="" placeholder="Confirm Password" name="password_confirmation" autocomplete="new-password">
                            </div>
                            <div class="form-group col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            	<button class="btn btn-default btn-radius" type="submit">{{ __('Register') }}</button>
                            </div>
                            <div class="form-group col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="0.9s">
                            	<a class="forgot_pass" href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                       </form>
                    </div>
                </div>
                <div class="divider small_divider"></div>
                <div class="text-center">
                    <span class="animation" data-animation="fadeInUp" data-animation-delay="1s">I have an account?<a href="{{ route('login') }}"> Login</a></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION LOGIN --> 
@endsection
