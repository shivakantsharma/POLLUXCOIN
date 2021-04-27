@extends('layouts.app')
@section('content')
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/home_banner_bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Pricing Table</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="#">Home</a> </li>
                        <li><span>Pricing Table</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION PRICING TABLE- -->
<section class="bg-white">
	<div class="container ">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="title_default_dark title_border text-center">
                  <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Choose Your Plan</h4>
                </div>
            </div>
        </div>
        <div class="row small_space">
        	<div class="col-lg-4 col-md-4">
            	<div class="pricing_box text-center res_sm_mt_20">
                	<div class="pr_title blue_light_bg">
                    	<h3>Basic</h3>
                        <div class="price_tage">
                        	<h3>$100.00</h3>
                            <span>Per Month</span>
                        </div>
                    </div>
                    <div class="pr_content">
                        <ul class="list_none">
                        	<li>Basic Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                    	<a href="#" class="btn btn-default btn-radius">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
            	<div class="pricing_box text-center res_sm_mt_30">
                	<div class="pr_title pink_bg">
                    	<h3>Standard</h3>
                        <div class="price_tage">
                        	<h3>$500.00</h3>
                            <span>Per Month</span>
                        </div>
                    </div>
                    <div class="pr_content">
                        <ul class="list_none">
                        	<li>Standard Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                    	<a href="#" class="btn btn-default btn-radius">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
            	<div class="pricing_box text-center res_sm_mt_30">
                	<div class="pr_title yellow_bg">
                    	<h3>Unlimited</h3>
                        <div class="price_tage">
                        	<h3>$1000.00</h3>
                            <span>Per Month</span>
                        </div>
                    </div>
                    <div class="pr_content">
                        <ul class="list_none">
                        	<li>Unlimited Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                    	<a href="#" class="btn btn-default btn-radius">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PRICING TABLE- -->

<!-- START SECTION CALL TO ACTION- -->
<section class="blue_light_bg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-lg-9">
            	<div class="action-content res_md_mb_20">
                    <h3 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Let Us Help You to Find a Solution That Meets Your Needs</h3>
                    <p class="m-0 animation" data-animation="fadeInUp" data-animation-delay="0.4s">if you think it's just you're looking for. Please contact us!</p>
                </div>
            </div>
            <div class="col-lg-3 text-lg-right">
            	<a href="#" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="0.45">Contact Us <i class="ion-ios-arrow-thin-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->

<!-- START CLIENTS SECTION -->
<section class="client_logo bg-white">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<div class="title_default_dark title_border text-center">
        			<h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Our Sponsers</h4>
        		</div>
        	</div>
        </div>
        <div class="row align-items-center text-center overflow_hide small_space">
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.3s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray1.png')}}" alt="client_logo_dark_gray1" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.4s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray2.png')}}" alt="client_logo_dark_gray2" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.5s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray3.png')}}" alt="client_logo_dark_gray3" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.6s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray4.png')}}" alt="client_logo_dark_gray4" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.7s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray5.png')}}" alt="client_logo_dark_gray5" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray6.png')}}" alt="client_logo_dark_gray6" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.9s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray7.png')}}" alt="client_logo_dark_gray7" /> 
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
            	<div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="1s"> 
                	<img src="{{URL::asset('assets/images/client_logo_dark_gray8.png')}}" alt="client_logo_dark_gray8" /> 
                </div>
            </div>
        </div>
    </div>
</section>

@endsection