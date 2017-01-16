<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Euro Travel</title>

	
	<link rel="stylesheet" href="{{ asset('/front/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/flexslider.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/front/assets/css/main.css') }}">	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		@include('front.includes.header') 		
	</nav>

<!-- Home -->
		<div id="header">
			@include('front.includes.banner') 		    
		</div> 
		<!-- /#header -->
<!-- Find a Tour -->
	<section class="tour section-wrapper container">
		@include('front.includes.search')
	</section> 
	<!-- /.tour -->


<!-- Our Blazzing offers -->
	<section class="offer section-wrapper">
		@include('front.includes.offer')		
	</section> <!-- /.offer -->


<!-- Top place to visit -->
	<section class="visit section-wrapper">
		@include('front.includes.top_place')		
	</section> <!-- /.visit -->

<div class="offer-cta">
	@include('front.includes.our_offer')	
</div> <!-- /.offer-cta -->

	<section class="additional-services section-wrapper">
		@include('front.includes.additional')		
	</section> <!-- /.Additional-services -->


	<div class="section-wrapper sponsor">
		@include('front.includes.partners')		
	</div> <!-- /.sponsor -->

	<div class="subscribe section-wrapper">
		@include('front.includes.newsletter')		
	</div> <!-- /.subscribe -->

		
	<footer>
		@include('front.includes.footer') 			
	</footer>


	<script src="{{ asset('/front/assets/js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('/front/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/front/assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/front/assets/js/contact.js') }}"></script>
	<script src="{{ asset('/front/assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('/front/assets/js/script.js') }}"></script>






</body>
</html>