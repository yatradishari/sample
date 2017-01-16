@extends('front')
@section('content')
<div class="container">
	<!-- <div class="filter-links filterable-nav">
		<select class="mobile-filter">
			<option value="*">Show all</option>
			<option value=".south-america">South America</option>
			<option value=".asia">Asia</option>
			<option value=".africa">Africa</option>
			<option value=".north-america">North America</option>
			<option value=".europe">Europe</option>
			<option value=".australia">Australia</option>	
		</select>
		<a href="#" class=" current wow fadeInRight" data-filter="*">Show all</a>
		<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".south-america">South America</a>
		<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".asia">Asia</a>
		<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".africa">Africa</a>
		<a href="#" class="wow fadeInRight" data-wow-delay=".8s" data-filter=".north-america">North America</a>
		<a href="#" class="wow fadeInRight" data-wow-delay="1s" data-filter=".europe">Europe</a>
		<a href="#" class="wow fadeInRight" data-wow-delay="1.2s" data-filter=".australia">Australia</a>
	</div>-->
	<div class="filterable-items">
		@foreach($destinations as $destination)
		<div class="filterable-item south-america">
			<article class="offer-item">
				<figure class="featured-image">
					@if(file_exists(env('UPLOADS').$destination->primary_image['image_name']))
						<img src="<?php echo env('UPLOADS').$destination->primary_image['image_name'];?>"  alt="{{ $destination->location_name}}">
					@else
						<img src="public/admin/images/no_image.png"  alt="{{ $destination->location_name}}">
					@endif
				</figure>
				<h2 class="entry-title">
					<a href="destination/details/{{ $destination->id}}">
						{{ $destination->location_name}}
					</a>
				</h2>
				<p>{{ short($destination->description ) }}</p>
				<!-- <div class="price">
					<strong>$2900</strong>
					<small>/10 days</small>
				</div> -->
			</article>
		</div>	
		@endforeach
	</div>

	<div class="pagination wow fadeInUp">
		<span class="page-numbers current">1</span>
		<a href="#" class="page-numbers">2</a>
		<a href="#" class="page-numbers">3</a>
		<a href="#" class="page-numbers">4</a>
	</div>

</div>
</section> <!-- /.wwa -->
@endsection