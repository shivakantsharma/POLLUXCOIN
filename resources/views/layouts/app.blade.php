<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cryptocash is Professional Creative Template" />
<!-- SITE TITLE -->
<title>Polluxcoin</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/images/favicon.png')}}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}" >
<!-- ionicons CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/css/ionicons.min.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{URL::asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/spop.min.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
<!-- Color CSS -->
<link id="layoutstyle" rel="stylesheet" href="{{URL::asset('assets/color/theme.css')}}">
<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
<!-- End of StatCounter Code -->

</head>

<body class="v_royal_blue" data-spy="scroll" data-offset="110">

<!-- START LOADER -->
<!-- <div id="loader-wrapper">
    <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div> -->
<!-- END LOADER --> 

<!-- START HEADER -->
@section('header')
    @include('includes.header')
@show
<!-- END HEADER --> 

@yield('content')

<!-- START FOOTER SECTION -->
@section('footer')
    @include('includes.footer')
@show
<!-- END FOOTER SECTION --> 

<a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="{{URL::asset('assets/js/jquery-1.12.4.min.js')}}"></script> 
<script>
$(document).ready(function(){
  $("#subscribe").click(function(){
    var email= $('#subscriber_email').val();
    if(email && IsEmail(email)==true) { 
        $.ajax({
        url: 'subscribe',
        type: 'POST',
        data : {email: email,_token: "{{ csrf_token() }}"},
        success: function (response){
            if(response==1){  
                $('#message').show();
               $('#message').text("Newsletter Successfully Submitted");
               setTimeout(function(){  $('#message').hide(); }, 3000);
            }
            else{
                $('#message').text("failed");
            }
        },
        error: function (){
            $('#message').text("error");
        }
     });
     return false;
    }
    else{
        $('#message').show();
        $('#message').text("Empty or invalid email");
        setTimeout(function(){ $('#message').hide(); }, 3000);
    }
  });
});
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
</script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- owl-carousel min js  --> 
<script src="{{URL::asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script> 
<!-- magnific-popup min js  --> 
<script src="{{URL::asset('assets/js/magnific-popup.min.js')}}"></script> 
<!-- waypoints min js  --> 
<script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script> 
<!-- parallax js  --> 
<script src="{{URL::asset('assets/js/parallax.js')}}"></script> 
<!-- countdown js  --> 
<script src="{{URL::asset('assets/js/jquery.countdown.min.js')}}"></script> 
<!-- particles min js  --> 
<script src="{{URL::asset('assets/js/particles.min.js')}}"></script> 
<!-- scripts js --> 
<script src="{{URL::asset('assets/js/jquery.dd.min.js')}}"></script> 
<!-- jquery.counterup.min js --> 
<script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script> 
<!-- chart js  --> 
<script src="{{URL::asset('assets/js/Chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/js/Chart.PieceLabel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/chart_script3.js')}}"></script>
<!-- modern_canvas js --> 
<script src="{{URL::asset('assets/js/modern_canvas.js')}}"></script>
<script src="{{URL::asset('assets/js/spop.min.js')}}"></script> 
<script src="{{URL::asset('assets/js/notification.js')}}"></script> 
<!-- scripts js --> 
<script src="{{URL::asset('assets/js/scripts.js')}}"></script>
</body>
</html>