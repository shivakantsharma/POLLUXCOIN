@extends('layouts.app')
@section('content')
<style>

</style>
<x-total-income />
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="{{URL::asset('assets/images/home_banner_bg.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">About Us</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="#">Home</a> </li>
                        <li><span>About us</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT -->
<section class="small_pb bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="res_md_mb_30 res_sm_mb_20">
                    <div class="title_default_dark title_border">
                      <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">About The Cryptocash</h4>
                      <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">assets coin is Blockchain based decentralized crypto currency which runs on Tron Blockchain designed for the file sharing and storage of data. Where we can keep data securely in decentralized cloud storage without third party interference. </p>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">There will be no issue of loosing data as feared in the centralized cloud storage providers. assets coin holders will have multiple benefits in future. The result is an overall cost reduction for the consumer. </p>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">assets bringing Cloud storage on a public Blockchain network and acts as a distributed, decentralized storage facility that makes it more efficient and cost-effective.   Besides this assets Coin will also be used for the utility bills, mobile recharges, and various payment methods.</p>
                    </div>
                    <a href="https://www.youtube.com/watch?v=ZE2HxTmxfrI" class="btn btn-primary video animation" data-animation="fadeInUp" data-animation-delay="1s"><span class="ion-play"></span>Let's Start</a> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
            	<div class="text-center"> 
                	<img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="{{URL::asset('assets/images/about_img2.png')}}" alt="aboutimg2"/> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT --> 

<!-- START SECTION WHY CHOOSE US -->
<section class="small_pt bg-white">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
				<div class="title_default_dark title_border text-center">
                  <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Why Choose Us?</h4>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">We are working on TRON one of the largest Blockchain- based operating systems in the world. TRON Wallet suppports POX on TRON's Mainnet.</p>
        		</div>
			</div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                	<img src="{{URL::asset('assets/images/wc_icon1.png')}}" alt="wc_icon1"/>
                    <h4>First DECENTRALIZED Cloud storage</h4>
                    <p>Need of Hour  the person who is using  laptop , Mobile will be holder of POX  worldwide</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                	<img src="{{URL::asset('assets/images/wc_icon2.png')}}" alt="wc_icon2"/>
                    <h4>High-throughput</h4>
                    <p>High throughput is achieved by improving the TPS in TRON, which has surpassed Bitcoin and Ethereum, to a daily-use practical degree.</p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
            	<div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                	<img src="{{URL::asset('assets/images/wc_icon3.png')}}" alt="wc_icon3"/>
                    <h4>High-scalability</h4>
                    <p>Applications are given a wider variety of ways to be deployed in TRON because of its scalability and highly effective smart contract. It can support enormous numbers of users.</p>
                </div>
            </div>
    	</div>
  	</div>
</section>
<!-- END SECTION WHY CHOOSE US --> 

<!-- START SECTION COUNTER --> 
<section class="counter_wrap overlay background_bg counter_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="box_counter text-center res_sm_mb_20">
                    <i class="ion-ios-pie animation" data-animation="fadeInUp" data-animation-delay="0.2s"></i>
                    <h3 class="counter animation" data-animation="fadeInUp" data-animation-delay="0.3s">500</h3>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Recurring Buys</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="box_counter text-center res_sm_mb_20">
                    <i class="ion-help-buoy animation" data-animation="fadeInUp" data-animation-delay="0.5s"></i>
                    <h3 class="counter animation" data-animation="fadeInUp" data-animation-delay="0.6s">800</h3>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.7s">Support Countries</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="box_counter text-center res_xs_mb_20">
                    <i class="ion-ios-locked animation" data-animation="fadeInUp" data-animation-delay="0.8s"></i>
                    <h3 class="counter animation" data-animation="fadeInUp" data-animation-delay="0.9s">1200</h3>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="1s">Easy &amp; Secure</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="box_counter text-center">
                    <i class="ion-android-contacts animation" data-animation="fadeInUp" data-animation-delay="1.1s"></i>
                    <h3 class="counter animation" data-animation="fadeInUp" data-animation-delay="1.2s">1500</h3>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="1.3s">Producers</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->

<!-- START SECTION TEAM -->
<section class="section_team bg_gray">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title_default_dark title_border text-center">
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Invester Board</h4>
            </div>
          </div>
        </div>
        <div class="row small_space justify-content-center">
          <div class="col-lg-9 col-md-12">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="text-center"> 
                    	<img src="{{URL::asset('assets/images/team_img5.png')}}" alt="team5"/>
                    	<div class="team_social_s2 list_none">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="team_info text-center">
                        <h4><a href="#team5" class="content-popup">Tricia Diyana</a></h4>
                        <p>Invester</p>
                    </div>
                    <div id="team5" class="team_pop mfp-hide">
                        <div class="row m-0">
                            <div class="col-md-4 text-center"> 
                            	<div class="team_img_wrap">
                                	<img class="w-100" src="{{URL::asset('assets/images/team-lg-5.jpg')}}" alt="user_img-lg"/>
                                    <div class="team_title"> 
                                        <h4>Tricia Diyana</h4>
                                        <span>Invester</span>
                                    </div> 
                                </div>
                                <div class="social_single_team list_none mt-3">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <div class="pt-3">
                                    <h5>About</h5>
                                    <hr>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="text-center"> 
                    	<img src="{{URL::asset('assets/images/team_img6.png')}}" alt="team6"/>
                    	<div class="team_social_s2 list_none">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="team_info text-center">
                        <h4><a href="#team6" class="content-popup">Kent Pierce</a></h4>
                        <p>Invester</p>
                    </div>
                    <div id="team6" class="team_pop mfp-hide">
                        <div class="row m-0">
                            <div class="col-md-4 text-center"> 
                            	<div class="team_img_wrap">
                                	<img class="w-100" src="{{URL::asset('assets/images/team-lg-6.jpg" alt="user_img-lg')}}"/>
                                    <div class="team_title"> 
                                        <h4>Kent Pierce</h4>
                                        <span>Invester</span>
                                    </div> 
                                </div>
                                <div class="social_single_team list_none mt-3">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <div class="pt-3">
                                    <h5>About</h5>
                                    <hr>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
                <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                    <div class="text-center"> 
                    	<img src="{{URL::asset('assets/images/team_img7.png')}}" alt="team7"/>
                    	<div class="team_social_s2 list_none">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="team_info text-center">
                        <h4><a href="#team7" class="content-popup">Rose Morgen</a></h4>
                        <p>Invester</p>
                    </div>
                    <div id="team7" class="team_pop mfp-hide">
                        <div class="row m-0">
                            <div class="col-md-4 text-center"> 
                            	<div class="team_img_wrap">
                                	<img class="w-100" src="{{URL::asset('assets/images/team-lg-7.jpg')}}" alt="user_img-lg"/> 
                                	<div class="team_title"> 
                                        <h4>Rose Morgen</h4>
                                        <span>Invester</span>
                                    </div>
                                </div>
                                <div class="social_single_team list_none mt-3">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-md-8">
                                <div class="pt-3">
                                    <h5>About</h5>
                                    <hr>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="divider small_divider"></div>
        <div class="row">
        	<div class="col-md-12 text-center">
            	<a href="#" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="0.2s">View All Team <i class="ion-ios-arrow-thin-right"></i></a>
            </div>
        </div>
    </div>
    <div class="divider large_divider"></div>
    <div class="angle_bottom"></div>
</section>
<!-- END SECTION TEAM --> 

<!-- START SECTION TESTIMONIAL -->
<section class="test bg-white">
	<div class="container">
    	<div class="row">
        
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_dark title_border text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Testimonial</h4>
              </div>
            </div>
        </div>
        <div class="row small_space">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<div class="testimonial_slider owl-carousel owl-theme">
                	<div class="item">
                    	<div class="testimonial_wrap rounded_img">
                        	<img src="{{URL::asset('assets/images/testmonial_client1.jpg')}}" class="animation" data-animation="zoomIn" data-animation-delay="0.2s" alt="testmonial_client1"/>
                            <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Kerri Reece</h5>
                            <span class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">CEO Company</span>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">You should not expect anything more. This is a fantastic program, punctual paying, thanks a lot. I recommend this hyip!</p>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="testimonial_wrap rounded_img">
                        	<img src="{{URL::asset('assets/images/testmonial_client2.jpg')}}" class="animation" data-animation="zoomIn" data-animation-delay="0.2s" alt="testmonial_client2"/>
                            <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Alvaro Martin</h5>
                            <span class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">CEO Company</span>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work.This is a realistic program for anyone looking  </p>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="testimonial_wrap rounded_img">
                        	<img src="{{URL::asset('assets/images/testmonial_client3.jpg')}}" class="animation" data-animation="zoomIn" data-animation-delay="0.2s" alt="testmonial_client3"/>
                            <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Jessica Bell</h5>
                            <span class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Head Of Sale</span>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work.This is a realistic program for anyone looking  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection