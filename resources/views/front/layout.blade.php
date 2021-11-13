<!DOCTYPE html>
<html>
<head>
	<title>Fashion Experts | EShop</title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('front_assets/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('front_assets/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('front_assets/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('front_assets/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('front_assets/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('front_assets/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('front_assets/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('front_assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/responsive.css')}}">
</head>
<body class="js">


	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

<header class="header shop">

 {{--Top Bar--}}	
	
 <x-front.top-bar-section/>

 {{--Top Bar--}}	

 <x-front.middle-bar-section/>

 {{--Main Menu--}}

 <x-front.main-menu-section/>

</header>

@yield('content')


{{--Footer Section--}}

<x-front.footer-section/>

	<!-- Jquery -->
    <script src="{{asset('front_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('front_assets/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('front_assets/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('front_assets/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('front_assets/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('front_assets/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('front_assets/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('front_assets/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('front_assets/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('front_assets/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('front_assets/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('front_assets/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('front_assets/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('front_assets/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('front_assets/js/active.js')}}"></script>
</body>
</html>