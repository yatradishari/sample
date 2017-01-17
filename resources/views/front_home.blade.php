<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Home Travel</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet" type="text/css">
		<link href="{{ asset('/front/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('/front/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/front/style.css') }}">
		
		<!--[if lt IE 9]>
		<script src="{{ asset('/front/js/ie-support/html5.js') }}"></script>
		<script src="{{ asset('/front/js/ie-support/respond.js') }}"></script>
		<![endif]-->

	</head>

	<body class="slider-collapse">
		
		<div id="site-content">			
			@include('includes.header')
			<main class="content">
                @include('includes.banner')
				<div class="fullwidth-block features-section">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft" data-wow-delay=".3s">
									<i class="icon-ticket"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Laborum expedita fugiat et quas quia! Odio dignissimos beatae aspernatur in vero culpa excepturi consequatur!</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft">
									<i class="icon-plane"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lectetur recusandae quasi repellendus accusamus ipsa sed quibusdam officia aspernatur natus itaque, asperiores impedit numquam dolorum.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight">
									<i class="icon-jetski"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>L culpa ex dolorum ipsa, maxime soluta repudiandae officia corrupti. Doloribus iste voluptatibus nostrum?</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight" data-wow-delay=".3s">
									<i class="icon-shuttelcock"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lam sit, facere dicta libero ipsa. Repellat deleniti dignissimos, excepturi minima voluptatibus mollitia adipisci iusto.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
					<div class="container">
						<h2 class="section-title">The newest holiday offers</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn">
									<figure class="featured-image"><img src="../public/front/dummy/offer-thumbnail-1.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="#" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".2s">
									<figure class="featured-image"><img src="../public/front/dummy/offer-thumbnail-2.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="#" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".4s">
									<figure class="featured-image"><img src="../public/front/dummy/offer-thumbnail-3.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="#" class="button">See details</a>
								</article>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn" data-wow-delay=".6s">
									<figure class="featured-image"><img src="../public/front/dummy/offer-thumbnail-4.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Nemo enim ipsam voluptatem</a></h2>
									<p>Piditate non provident similique	 sunt in culpa qui oficia deserunt molitia animi est aborum et dolorum fuga</p>
									<a href="#" class="button">See details</a>
								</article>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<h2 class="section-title">Testimonials</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp">
									<figure class="avatar"><img src="../public/front/dummy/person-1.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Jessica Tracy</cite>
										<span>Creative agency CEO</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".2s">
									<figure class="avatar"><img src="../public/front/dummy/person-2.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>John Smith</cite>
										<span>Traveler</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".4s">
									<figure class="avatar"><img src="dummy/person-3.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Susan Webb</cite>
										<span>Hairdresser</span>
									</blockquote>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp" data-wow-delay=".6s">
									<figure class="avatar"><img src="../public/front/dummy/person-4.jpg" alt=""></figure>
									<blockquote class="testimonial-body">
										<p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
										<cite>Sarah Brown</cite>
										<span>Athlete</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .content -->

			<footer class="site-footer wow fadeInUp">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">About us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi asperiores magnam ducimus laboriosam soluta, odio doloribus, voluptas numquam facilis consectetur nam in repudiandae commodi odit iste sed doloremque repellat.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Helpful Links</h3>
									<ul class="list-arrow">
										<li><a href="#">Labore et dolore magnam</a></li>
										<li><a href="#">Dolore magnam</a></li>
										<li><a href="#">Magnam Labore et</a></li>
										<li><a href="#">Dolore mabore magnam</a></li>
										<li><a href="#">Et dolore magnam</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Helpful Links</h3>
									<ul class="list-arrow">
										<li><a href="#">Labore et dolore magnam</a></li>
										<li><a href="#">Dolore magnam</a></li>
										<li><a href="#">Magnam Labore et</a></li>
										<li><a href="#">Dolore mabore magnam</a></li>
										<li><a href="#">Et dolore magnam</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-customer-info">
									<h3 class="widget-title">Customer Service</h3>
									<img src="../public/front/dummy/footer-customer-service.jpg" alt="" class="pull-left">
									<div class="cs-info">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptates pariatur vero.</p>
										<p>+1 421 458 321 <br> <a href="mailto:cs@companyname.com">cs@companyname.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('includes.footer')
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="{{ asset('/front/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('/front/js/min/plugins-min.js') }}"></script>
		<script src="{{ asset('/front/js/min/app-min.js') }}"></script>
		
	</body>

</html>