<header class="header_wrap fixed-top">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg"> 
			<a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="1s"> 
            	<img class="logo_light" src="{{URL::asset('assets/images/logo.png')}}" alt="logo" /> 
                <img class="logo_dark" src="{{URL::asset('assets/images/logo_dark.png')}}" alt="logo" /> 
            </a>
            <button class="navbar-toggler animation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-animation="fadeInDown" data-animation-delay="1.1s"> 
                <span class="ion-android-menu"></span> 
            </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.1s"><a class="nav-link nav_item active" href="{{ URL::asset('/') }}">Home</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a class="nav-link nav_item" href="{{ URL::asset('about') }}">About</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.3s"><a class="nav-link nav_item" href="{{ URL::asset('services') }}">Services</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.4s"><a class="nav-link nav_item" href="{{ URL::asset('mining-plans') }}">Mining Plans</a></li>
					<li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a class="nav-link nav_item" href="{{ URL::asset('faq') }}">Faq's</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.6s"><a class="nav-link nav_item" href="{{ URL::asset('contact') }}">Contact</a></li>
                </ul>
                <ul class="navbar-nav nav_btn align-items-center">
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a class="btn btn-default btn-radius nav_item" href="{{ URL::asset('login') }}">Login</a></li>
                </ul>
			</div>
		</nav>
	</div>
</header>