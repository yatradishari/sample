<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>{{ settings('SITE_NAME') }}</title>
		<meta name="description" content="{{ settings('META_DESCRIPTIONS') }}">
        <meta name="keywords" content="{{ settings('META_KEYWORDS') }}">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('/public/front/fonts/font-awesome.min.css') }}">
		<!-- Loading main css file -->		
		<link rel="stylesheet" href="{{ asset('/public/front/css/animate.min.css') }}">		
		<link rel="stylesheet" href="{{ asset('/public/front/style.css') }}">
		
		<!--[if lt IE 9]>		
		<script src="{{ asset('/public/front/js/ie-support/html5.js') }}"></script>		
		<script src="{{ asset('/public/front/js/ie-support/respond.js') }}"></script>
		<![endif]-->
		@yield('style')
		<script src="{{ asset('/public/front/js/jquery-1.11.1.min.js') }}"></script>		
		<script src="{{ asset('/public/front/js/min/plugins-min.js') }}"></script>		
		<script src="{{ asset('/public/front/js/min/app-min.js') }}"></script>
		@yield('scripts')

	</head>

	<body>
		
		<div id="site-content">
			
			@include('front.includes.header') 	

			<main class="content">
				<div class="fullwidth-block">
					@yield('content')
				</div>

				
			</main> <!-- .content -->

			<footer class="site-footer wow fadeInUp">				
				@include('front.includes.footer_top') 	
				@include('front.includes.footer') 	
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		
		
	</body>

</html>