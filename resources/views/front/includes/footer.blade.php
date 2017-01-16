<div class="footer-bottom">
	<div class="container">
		<div class="branding pull-left">
			<img src="{!!asset('public/front/images/logo.png')!!}" alt="Company Name" class="logo">
			<h1 class="site-title"><a href="{{ url('/') }}">{{ settings('COMPANY_NAME') }}</a></h1>
			<small class="site-description">{{ settings('TAGLINE') }}</small>
		</div>

		<div class="contact-links pull-right">
			<a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> 983 Avenue Street, New York</a>
			<a href="tel:+134453455345"><i class="fa fa-phone"></i> +1 344 5345 5345</a>
			<a href="mailto:contact@companyname.com"><i class="fa fa-envelope"></i> {{ settings('CONTACT_EMAIL') }}</a>
		</div>
	</div>
</div>
<div class="colophon">
	<div class="container">
		<p class="copy">Copyright 2014 Company Name, Designed by Themezy, All right reserved.</p>
	</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76571750-1', 'auto');
  ga('send', 'pageview');

</script>