<div class="container">
	<h2 class="section-title">The newest holiday offers</h2>
	<div class="row">
		@for($i=0; $i<4; $i++)
		<div class="col-md-3 col-sm-6 col-xs-12">
			<article class="offer wow bounceIn">
				<figure class="featured-image">
					@if(isset($destination->primary_image->image_name))
						<img src="<?php echo env('UPLOADS').$destinations->primary_image->image_name;?>"  alt="{{ $destinations[$i]['location_name']}}">
					@else
						<img src="public/admin/images/no_image.png"  alt="{{ $destinations[$i]['location_name']}}">
					@endif
				</figure>
				<h2 class="entry-title"><a href="">{{ $destinations[$i]['location_name']}}</a></h2>
				<p>{{ short($destinations[$i]['description']) }}</p>
				<a href="destination/details/{{ $destinations[$i]['id']}}" class="button">See details</a>
			</article>
		</div>
		@endfor
		
	</div>
</div>