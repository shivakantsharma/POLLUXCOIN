@extends('layouts.app')
@section('content')
<!-- START SECTION BANNER -->
<section id="home_section" class="section_banner gradient_box2 pb-0" data-image-src="assets/images/banner_bg3.png" data-parallax="scroll" data-z-index="1">
    <canvas id="banner_canvas" class="transparent_effect fixed"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 order-lg-first">
                <div class="banner_text text_md_center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Access the power of blockchain</h1>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="1.3s">Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend.</p>
                    <div class="btn_group animation" data-animation="fadeInUp" data-animation-delay="1.4s"> 
                        <a href="#whitepaper" class="btn btn-default btn-radius content-popup">Whitepaper <i class="ion-ios-arrow-thin-right"></i></a> 
                        <a href="https://t.me/polluxcoin_airdrop_bot" class="btn btn-border-white btn-radius">Join Airdrop Earn Free POX <i class="ion-ios-arrow-thin-right"></i></a> 
                    </div>
                    <div id="whitepaper" class="team_pop mfp-hide">
                        <div class="row m-0">
                            <div class="col-md-7">
                                <div class="pt-3 pb-3">
                                    <div class="title_blue_dark title_border"> 
                                        <h4>Download Whitepaper</h4>
                                        <p>A purely peer-to-peer version of electronic cash would allow online payments to be sent directly from one party to another without going through a financial institution.Digital signatures provide part of the solution, but the main benefits are lost if a trusted third party is still required to prevent double-spending.</p>
                                        <p>The network timestamps transactions by hashing them into an ongoing chain of hash-based proof-of-work, forming a record that cannot be changed without redoing the proof-of-work.</p>
										<a href="white-paper.pdf" class="btn btn-default btn-radius">Download Now <i class="ion-ios-arrow-thin-right"></i></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5"> 
                                <img class="pt-3 pb-3" src="assets/images/whitepaper3.png" alt="whitepaper3"/> 
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 order-first">
                <div class="banner_image_right res_md_mb_50 res_xs_mb_20 animation" data-animation-delay="1.5s" data-animation="fadeInRight">
                	<img alt="banner_vector6" src="assets/images/banner_img6.png">
                </div>
          	</div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="divider small_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<div class="banner_inner">
                    <div class="blue_dark_bg banner_token text-center animation" data-animation="fadeIn" data-animation-delay="1.1s">
                        <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center">
                        	<div class="token_col">
                            	<div class="tk_countdown_time border-0 p-0 counter_medium animation" data-animation="fadeInUp" data-animation-delay="1.2s" data-time="2022/02/06 00:00:00"></div>
                            </div>
                            <div class="progress_col">
                                <div class="progress animation" data-animation="fadeInUp" data-animation-delay="1.3s">
                                	<div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>
                                    <span class="progress_label bg-white" style="left: 30%"> <strong> 46,000 POX </strong></span>
                                    <span class="progress_label bg-white" style="left: 75%"> <strong> 90,000 POX </strong></span>
                                    <span class="progress_min_val">Sale Raised</span>
                                    <span class="progress_max_val">Soft-caps</span>
                                </div>
                            </div>
                            <div class="btn_col">
                        	<a href="#" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="1.40s" >Earn Free POX <i class="ion-ios-arrow-thin-right"></i></a>
                            </div>
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT US -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
            	<div class="video_box animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                	<img src="assets/images/video_img.jpg" class="w-100" alt="video_img"/>
                    <a href="https://www.youtube.com/watch?v=ZE2HxTmxfrI" class="video play_btn"><span class="play_icon"></span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text_md_center">
                <div class="title_default_light">
                  <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Advancing Blockchain Technology</h4>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Pollux coin is Blockchain based decentralized crypto currency which runs on Tron Blockchain designed for the file sharing and storage of data. Where we can keep data securely in decentralized cloud storage without third party interference. </p>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">There will be no issue of loosing data as feared in the centralized cloud storage providers. Pollux coin holders will have multiple benefits in future. The result is an overall cost reduction for the consumer. </p>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">Pollux bringing Cloud storage on a public Blockchain network and acts as a distributed, decentralized storage facility that makes it more efficient and cost-effective.   Besides this Pollux Coin will also be used for the utility bills, mobile recharges, and various payment methods.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US --> 

<!-- START SECTION SERVICES -->
<section id="service" class="gradient_box2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
				<div class="title_default_light title_border text-center">
                  <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Meet our solution for you</h4>
                  <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">We are working on TRON one of the largest Blockchain- based operating systems in the world. TRON Wallet suppports POX on TRON's Mainnet.</p>
        		</div>
			</div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap text-center box_shadow_none p-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<img src="assets/images/Protection.png" alt="Wallet"/>
                    <h4>First DECENTRALIZED Cloud storage </h4>
                    <p>Need of Hour  the person who is using  laptop , Mobile will be holder of POX  worldwide</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap text-center box_shadow_none p-0 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<img src="assets/images/Buy_Sell.png" alt="Protection"/>
                    <h4>Utility Bills, Mobile recharge</h4>
                    <p>POX will take care of every thing </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap text-center box_shadow_none p-0 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                	<img src="assets/images/Analysis.png" alt="Analysis"/>
                    <h4>Speed  Matters</h4>
                    <p>Enjoy 2000 transaction speed per second  </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap text-center box_shadow_none p-0 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                	<img src="assets/images/Trading.png" alt="Projects"/>
                    <h4>EXCHANGE</h4>
                    <p>POX  exchanged to any currency, Fiat with low fees</p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
            	<div class="box_wrap text-center box_shadow_none p-0 animation" data-animation="fadeInUp" data-animation-delay="1.0s">
                	<img src="assets/images/Wallet.png" alt="Trading"/>
                    <h4>High-throughput</h4>
                    <p>High throughput is achieved by improving the TPS in TRON, which has surpassed Bitcoin and Ethereum, to a daily-use practical degree.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap text-center box_shadow_none p-0 animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                	<img src="assets/images/Project.png" alt="Buy_Sell"/>
                    <h4>High-scalability</h4>
                    <p>Applications are given a wider variety of ways to be deployed in TRON because of its scalability and highly effective smart contract. It can support enormous numbers of users.</p>
                </div>
            </div>
    	</div>
  	</div>
</section>
<!-- END SECTION SERVICES --> 

<!-- START SECTION TOKEN SALE -->
<section id="token" class="section_token">
	<div class="container">
        <div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
                <div class="title_default_light text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Token Distribution</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Join the industry leaders to discuss where the markets are heading. We accept token payments. </p>
                </div>
			</div>
        </div>
        <div class="row align-items-center small_space">
        	<div class="col-xl-4 col-lg-5 col-md-12">
            	<div class="token_info_table_s2 h-100">
            		<table class="table table-blue m-0 h-100">
                    	<tbody>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                              <td>Starting Time :</td>
                              <td>APR 23,2018</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                              <td>Ending Time :</td>
                              <td>JUN 18,2018</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                              <td>Soft cap :</td>
                              <td>90,000 POX</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                              <td>Hard cap :</td>
                              <td>55,000 POX</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                              <td>TOken Symbol :</td>
                              <td>POX</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                              <td>Exchange Rate :</td>
                              <td>1 BTC = 1940 POX</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                              <td>Token Sale :</td>
                              <td>85,000 POX (8%)</td>
                            </tr>
                            <tr class="animation" data-animation="fadeInUp" data-animation-delay="0.9s">
                              <td>Total Transactions :</td>
                              <td>7,543</td>
                            </tr>
                  		</tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 col-sm-7">
            	<div class="res_md_mt_30 res_sm_mt_20 text-center animation" data-animation="fadeInRight" data-animation-delay="0.6s"> 
                    <canvas id="token_dist2" width="650"></canvas>
                    <div class="chart_icon">
                        <img src="assets/images/chart_icon.png"/>
                    </div>
                </div>
          </div>
            <div class="col-xl-3 col-lg-3 col-sm-5">
            	<ul class="list_none chart_info_list text-white ml-0 res_xs_mt_20 ">
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <span class="chart_bx color3"></span>
                        <span>Private/Pre Sale</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="chart_bx color4"></span>
                        <span> Public ICO</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <span class="chart_bx color11"></span>
                        <span>Team & Advisor</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <span class="chart_bx color1"></span>
                        <span>Marketing & General</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <span class="chart_bx color2"></span>
                        <span>Bounty</span>
                    </li>
                     <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                        <span class="chart_bx color12"></span>
                        <span>interconnection Dev</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <span class="chart_bx color13"></span>
                        <span>Marketing & General</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.9s">
                        <span class="chart_bx color8"></span>
                        <span>Mobile Ad Platform</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="1.0s">
                        <span class="chart_bx color7"></span>
                        <span>Ad Platform Integration</span>
                    </li>
                    <li class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">
                        <span class="chart_bx color6"></span>
                        <span>Operational Overhead</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TOKEN SALE --> 

<!-- SECTION MOBILE APP -->
<section id="mobileapp" class="gradient_box2">
	<div class="container">
    	<div class="row">	
        	<div class="col-lg-8 offset-lg-2">
            	<div class="title_default_light text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Download Mobile App</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">The use of crypto-currencies has become more widespread, and they are now increasingly accepted as a legitimate currency for transactions.</p>
                  </div>
            </div>
        </div>
    	<div class="row align-items-center small_space">
        	<div class="col-lg-4 col-md-12 col-sm-12">
                <div class="res_md_mt_40 res_md_mb_40 res_sm_mt_20 res_sm_mb_20 text-center animation" data-animation="zoomIn" data-animation-delay="0.2s"> 
                    <img class="bounceimg" src="assets/images/mobile_app5.png" alt="mobile_app5"/> 
                </div>
            </div>
            <div class="col-lg-8">
            	<div class="row">
        			<div class="col-md-6">
                        <ul class="list_none app_content">
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                <div class="app_icon">
                                    <img src="assets/images/Devices.png" alt="Devices"/>
                                </div>
                                <div class="app_desc">
                                    <h6>Different devices compatible</h6>
                                    <p>If you are going to use a passage of device, you need to be anything middle</p>
                                </div>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                <div class="app_icon">
                                    <img src="assets/images/Online_Buy_Sell.png" alt="Online_Buy_Sell"/>
                                </div>
                                <div class="app_desc">
                                    <h6>Online Buy & Sell</h6>
                                    <p>If you are going to use a passage of device, you need to be anything middle</p>
                                </div>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                <div class="app_icon">
                                    <img src="assets/images/Transformative.png" alt="Transformative"/>
                                </div>
                                <div class="app_desc">
                                    <h6>Transformative technologies</h6>
                                    <p>If you are going to use a passage of device, you need to be anything middle</p>
                                </div>
                            </li>
                        </ul>
                    </div>
            		<div class="col-md-6">
                        <ul class="list_none app_content">
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                <div class="app_icon">
                                    <img src="assets/images/Manage_wallet.png" alt="Manage_wallet"/>
                                </div>
                                <div class="app_desc">
                                    <h6>Manage your Wallet</h6>
                                    <p>If you are going to use a passage of device, you need to be anything middle</p>
                                </div>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                <div class="app_icon">
                                    <img src="assets/images/Stay_friend.png" alt="Stay_friend"/>
                                </div>
                                <div class="app_desc">
                                    <h6>Stay with Friend</h6>
                                    <p>If you are going to use a passage of device, you need to be anything middle</p>
                                </div>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                <div class="app_icon">
                                    <img src="assets/images/Bonus.png" alt="Bonus"/>
                                </div>
                                <div class="app_desc">
                                    <h6>Reward & Bonus</h6>
                                    <p>If you are going to use a passage of device, you need to be anything middle</p>
                                </div>
                            </li>
                        </ul>
                    </div>
            	</div>
                <div class="row">
                    <div class="col-md-12">
                        <div data-animation-delay="0.8s" data-animation="fadeInUp" class="btn_group text_md_center mt-4 pt-2 mt-lg-0 pt-lg-0 animation"> 
                            <a class="btn btn-default btn-radius" href="#"><em class="ion-social-android"></em>Google Store </a> 
                            <a class="btn btn-default btn-radius" href="#"><em class="ion-social-apple"></em>Apple Store</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION MOBILE APP --> 

<!-- START SECTION TIMELINE -->
<section id="roadmap">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 offset-lg-2">
            <div class="title_default_light text-center">
              <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Roadmap</h4>
              <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">The use of crypto-currencies has become more widespread, and they are now increasingly accepted as a legitimate currency for transactions.</p>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row roadmap_list small_space align-items-end">
            <div class="col-lg">
                <div class="single_roadmap roadmap_done">
                    <div class="roadmap_icon"></div>
                    <h6 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">April 2019</h6>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Launch POX Token </p>
                </div>
            </div>
            <div class="col-lg">
                <div class="single_roadmap roadmap_done">
                    <div class="roadmap_icon"></div>
                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">February 2020</h6>
                    <p class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">Listing in Exchanges & CoinMarketCap</p>
                </div>
            </div>
            <div class="col-lg">
                <div class="single_roadmap roadmap_done">
                    <div class="roadmap_icon"></div>
                    <h6 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">March 2020</h6>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Launch of POX Dapp</p>
                </div>
            </div>
            <div class="col-lg">
                <div class="single_roadmap">
                    <div class="roadmap_icon"></div>
                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">March 2021</h6>
                    <p class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">Launch of POX wallet</p>
                </div>
            </div>
            <div class="col-lg">
                <div class="single_roadmap">
                    <div class="roadmap_icon"></div>
                    <h6 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">October 2021</h6>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">An advanced gateway for enterprises to pay </p>
                </div>
            </div>
            <div class="col-lg">
                <div class="single_roadmap">
                    <div class="roadmap_icon"></div>
                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">December 2022</h6>
                    <p class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">Launch of Decentralize Cloud Storage</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TIMELINE --> 

<!-- START SECTION FAQ -->
<section id="faq" class="blue_bg  gradient_box2">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_light text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Frequently Asked Questions</h4>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context</p>
              </div>
            </div>
        </div>
        <div class="row small_space">
        	<div class="col-lg-3 col-md-12">
            	<ul class="nav nav-pills d-block tab_s2" id="pills-tab" role="tablist">
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <a class="tab-link active" data-toggle="tab" href="#tab1">General</a>
                      </li>
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <a class="tab-link" data-toggle="tab" href="#tab2">Pre-ICO & ICC </a>
                      </li>
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                        <a class="tab-link" data-toggle="tab" href="#tab3">ICO Tokens</a>
                      </li>
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                        <a class="tab-link" data-toggle="tab" href="#tab4">Client</a>
                      </li>
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <a class="tab-link" data-toggle="tab" href="#tab5">Legal</a>
                      </li>
                    </ul>
            </div>
        	<div class="col-lg-9 col-md-12">
                <div class="tab-content res_md_mt_30 res_sm_mt_20">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div id="accordion1" class="faq_content2">
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                              <div class="card-header" id="headingOne">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is cryptocurrency?</a> </h6>
                              </div>
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                                <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                              <div class="card-header" id="headingTwo">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Which cryptocurrency is best to buy today?</a> </h6>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                              <div class="card-header" id="headingThree">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How about day trading crypto?</a> </h6>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                                <div class="card-body"> While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader we are. </div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                              <div class="card-header" id="headingFour">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">When to sell a cryptocurrency?</a> </h6>
                              </div>
                              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                                <div class="card-body"> Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it. </div>
                              </div>
                            </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div id="accordion2" class="faq_content2">
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                              <div class="card-header" id="headingFive">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How does one acquire bitcoins?</a> </h6>
                              </div>
                              <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion2">
                                <div class="card-body"> While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                              <div class="card-header" id="headingSix">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Can I make money with Bitcoin?</a> </h6>
                              </div>
                              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                <div class="card-body"> You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                              <div class="card-header" id="headingSeven">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What happens when bitcoins are lost?</a> </h6>
                              </div>
                              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                <div class="card-body">When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand, when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                              <div class="card-header" id="headingEight">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Who controls the Bitcoin network?</a> </h6>
                              </div>
                              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                <div class="card-body">Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the software, they can't force a change in the Bitcoin protocol because all users are free to choose what software and version they use.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div id="accordion3" class="faq_content2">
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                              <div class="card-header" id="headingNine">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">How are bitcoins created?</a> </h6>
                              </div>
                              <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordion3">
                                <div class="card-body"> New bitcoins are generated by a competitive and decentralized process called "mining". This process involves that individuals are rewarded by the network for their services. Bitcoin miners are processing transactions and securing the network using specialized hardware and are collecting new bitcoins in exchange.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                              <div class="card-header" id="headingTen">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Why do bitcoins have value?</a> </h6>
                              </div>
                              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion3">
                                <div class="card-body">Bitcoins have value because they are useful as a form of money. Bitcoin has the characteristics of money (durability, portability, fungibility, scarcity, divisibility, and recognizability) based on the properties of mathematics rather than relying on physical properties (like gold and silver) or trust in central authorities (like fiat currencies). In short, Bitcoin is backed by mathematics. </div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                              <div class="card-header" id="headingEleven">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">What determines bitcoin's price?</a> </h6>
                              </div>
                              <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion3">
                                <div class="card-body"> The price of a bitcoin is determined by supply and demand. When demand for bitcoins increases, the price increases, and when demand falls, the price falls. There is only a limited number of bitcoins in circulation and new bitcoins are created at a predictable and decreasing rate</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                              <div class="card-header" id="headingTwelve">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">Can bitcoins become worthless?</a> </h6>
                              </div>
                              <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion3">
                                <div class="card-body"> Yes. History is littered with currencies that failed and are no longer used, such as the German Mark during the Weimar Republic and, more recently, the Zimbabwean dollar.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div id="accordion2" class="faq_content2">
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                              <div class="card-header" id="headingFive">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How does one acquire bitcoins?</a> </h6>
                              </div>
                              <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion2">
                                <div class="card-body"> While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                              <div class="card-header" id="headingSix">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Can I make money with Bitcoin?</a> </h6>
                              </div>
                              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                <div class="card-body"> You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                              <div class="card-header" id="headingSeven">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What happens when bitcoins are lost?</a> </h6>
                              </div>
                              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                <div class="card-body">When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand, when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                              <div class="card-header" id="headingEight">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Who controls the Bitcoin network?</a> </h6>
                              </div>
                              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                <div class="card-body">Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the software, they can't force a change in the Bitcoin protocol because all users are free to choose what software and version they use.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                    <div class="tab-pane fade" id="tab5" role="tabpanel">
                        <div id="accordion4" class="faq_content2">
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                              <div class="card-header" id="headingThirteen">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">Is Bitcoin legal?</a> </h6>
                              </div>
                              <div id="collapseThirteen" class="collapse show" aria-labelledby="headingThirteen" data-parent="#accordion4">
                                <div class="card-body">To the best of our knowledge, Bitcoin has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin exchanges.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                              <div class="card-header" id="headingFourteen">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">Is Bitcoin useful for illegal activities?</a> </h6>
                              </div>
                              <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion4">
                                <div class="card-body">Bitcoin is money, and money has always been used both for legal and illegal purposes. Cash, credit cards and current banking systems widely surpass Bitcoin in terms of their use to finance crime. Bitcoin can bring significant innovation in payment systems and the benefits of such innovation are often considered to be far beyond their potential drawbacks.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                              <div class="card-header" id="headingFifteen">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">Can Bitcoin be regulated?</a> </h6>
                              </div>
                              <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion4">
                                <div class="card-body"> The Bitcoin protocol itself cannot be modified without the cooperation of nearly all its users, who choose what software they use. Attempting to assign special rights to a local authority in the rules of the global Bitcoin network is not a practical possibility.</div>
                              </div>
                            </div>
                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                              <div class="card-header" id="headingSixteen">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">What about Bitcoin and taxes?</a> </h6>
                              </div>
                              <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion4">
                                <div class="card-body"> Bitcoin is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Bitcoin.</div>
                              </div>
                            </div>
                      </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FAQ -->

<!-- START SECTION CONTACT -->
<section id="contact" class="contact_section">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_light title_border text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Get In Touch!</h4>
              </div>
            </div>
        </div>
        <div class="row align-items-center small_space">
            <div class="col-lg-4 col-md-6 offset-lg-2">
            	<div class="blue_dark_bg contact_box_s2 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                    <div class="contact_title">
                        <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Contact With Us</h5>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Our office is located in a beautiful building and garden</p>
                    </div>
                    <ul class="list_none contact_info mt-margin">
                        
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"> 
                        	<i class="ion-ios-email"></i>
                            <div class="contact_detail"> <span>Email-id</span>
                            	<p>info@polluxcoin.info</p>
                            </div>
                        </li>
                  </ul>
              	</div>
            </div>
            <div class="col-lg-5 col-md-6">
            	<div class="pt-4 pt-md-0 animation" data-animation="fadeInRight" data-animation-delay="0.1s">
                    <form method="post" name="enq" class="field_form">
                    <div class="row">
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <input type="text" required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <input type="email" required="required" placeholder="Enter Email *" id="email" class="form-control" name="email">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <input type="text" required="required" placeholder="Enter Subject" id="subject" class="form-control" name="subject">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1s">
                        <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="2"></textarea>
                      </div>
                      <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                        <button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius btn-block" id="submitButton" name="submit" value="Submit">Submit <i class="ion-ios-arrow-thin-right"></i></button>
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
<!-- END SECTION CONTACT --> 
@endsection