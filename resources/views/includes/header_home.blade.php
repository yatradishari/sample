<header class="site-header wow fadeInDown">
    <div class="container">
        <div class="header-content">
            <div class="branding">
                <img src="../public/front/images/logo.png" alt="Company Name" class="logo">
                <h1 class="site-title"><a href="{{ url('/') }}">Company Name</a></h1>
                <small class="site-description">Tagline goes here</small>
            </div>
            
            <nav class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item"><a href="about-us.html">About us</a></li>
                    <li class="menu-item"><a href="{{ url('/destinations') }}">Destinations</a></li>
                    <li class="menu-item"><a href="{{ url('/touroperators') }}">Tour Operators</a></li>
                    <li class="menu-item"><a href="{{ url('/contactus') }}">Contact</a></li>
                </ul>
            </nav>
            
            <div class="social-links">
                <a href="{{ settings('FACEBOOK_URL') }}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="{{ settings('TWITTER_URL') }}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="{{ settings('GOOGLE_URL') }}" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a>
				<a href="{{ settings('SITE_NAME') }}" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</header> <!-- .site-header -->