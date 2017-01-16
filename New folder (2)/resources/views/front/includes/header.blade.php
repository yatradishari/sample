<header class="site-header wow fadeInDown">
	<div class="container">
		<div class="header-content">
			<div class="branding">
				<img src="{!!asset('public/front/images/logo.png')!!}" alt="Company Name" class="logo">
				<h1 class="site-title"><a href="{{ url('/') }}">{{ settings('COMPANY_NAME') }}</a></h1>
				<small class="site-description">{{ settings('TAGLINE') }}</small>
			</div>
			
			<nav class="main-navigation">
				<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
				<ul class="menu">
					<li class="menu-item"><a href="{{ url('destination') }}">Where to go</a></li>
					<li class="menu-item"><a href="our-offer.html">Our Offer</a></li>
					<li class="menu-item"><a href="customer-protection.html">Customer Protection</a></li>
					<li class="menu-item"><a href="{{ url('contact') }}">Contact</a></li>
				</ul>
			</nav>
			
			<div class="social-links">
				<a href="{{ settings('FACEBOOK_URL') }}" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="{{ settings('TWITTER_URL') }}" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="{{ settings('GOOGLE_URL') }}" class="google-plus"><i class="fa fa-google-plus"></i></a>
				<a href="{{ settings('SITE_NAME') }}" class="pinterest"><i class="fa fa-pinterest"></i></a>
			</div>
			
		</div>
		
		<!-- <nav class="breadcrumbs">
			<a href="{{ url('home') }}">Home</a> &rarr;
			<span>Our Offer</span>
		</nav> -->
	</div>
</header> <!-- .site-header -->