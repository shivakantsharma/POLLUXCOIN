@extends('layouts.app')
@section('content')
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="{{URL::asset('assets/images/home_banner_bg.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Contact Us</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="#">Home</a> </li>
                        <li><span>Contact</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION CONTACT FORM -->
<section class="small_pt bg-white ">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_dark title_border text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Drop Us A Line</h4>
              </div>
            </div>
        </div>
		<div class="row">
        	<div class="col-lg-8 offset-lg-2 col-md-12 pr-0 res_md_pr_15">
				<div class="lg_pt_20 res_sm_pt_0">
                        <form method="post" name="enq" class="field_form_s2">
                            <div class="row">
                            	<div class="form-group col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                	<input type="text" required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name">
                             	 </div>
                                <div class="form-group col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                	<input type="email" required="required" placeholder="Enter Email *" id="email" class="form-control" name="email">
                                </div>
                                <div class="form-group col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                	<input type="text" required="required" placeholder="Enter Subject" id="subject" class="form-control" name="subject">
                                </div>
                                <div class="form-group col-md-6 animation" data-animation="fadeInUp" data-animation-delay="1s">
                                	<input type="text" placeholder="Enter Phone No." id="phone" class="form-control" name="phone">
                                </div>
                                <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                                	<textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="3"></textarea>
                                </div>
                                <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.4s">
                                	<button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius" id="submitButton" name="submit" value="Submit">Submit <i class="ion-ios-arrow-thin-right"></i></button>
                                </div>
                                <div class="col-md-12">
                                	<div id="alert-msg" class="alert-msg text-center"></div>
                                </div>
                            </div>
                        </form>
                	</div>
            </div>
        </div>
    </div>
</section>  
@endsection