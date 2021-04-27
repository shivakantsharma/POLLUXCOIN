@extends('layouts.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll"
    data-image-src="assets/images/home_banner_bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Reset Password</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0"
                        data-animation="fadeInUp" data-animation-delay="1.3s">
                        <li><a href="{{URL::asset('/')}}">Home</a> </li>
                        <li><span>Reset Password</span></li>
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
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Reset your password
                        </p>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="field_form authorize_form">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group col-md-12 animation" data-animation="fadeInUp"
                                data-animation-delay="0.6s">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    required="" placeholder="Email" name="email" value="{{ old('email') }}"
                                    autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 text-center animation" data-animation="fadeInUp"
                                data-animation-delay="0.8s">
                                <button class="btn btn-default btn-radius"
                                    type="submit">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="divider small_divider"></div>
                <div class="text-center">
                    <span class="animation" data-animation="fadeInUp" data-animation-delay="1s">I have an account?<a
                            href="{{ route('login') }}"> Login</a></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION LOGIN -->
@endsection