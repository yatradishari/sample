@extends('front')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7 wow fadeInLeft">
			<h2 class="section-title">{{ $destinations[0]->location_name}}</h2>
			<figure>
				@if(file_exists(env('IMAGE_SHOW_PATH').env('UPLOADS').$destinations[0]->primary_image->image_name))
					<img src="<?php echo env('IMAGE_SHOW_PATH').env('UPLOADS').$destinations[0]->primary_image->image_name;?>"  alt="{{ $destinations[0]->location_name}}">
					@else
					<img src="<?php echo env('IMAGE_SHOW_PATH');?>public/admin/images/no_image.png"  alt="{{ $destinations[0]->location_name}}">
				@endif
			</figure>
			<p>
				{{ short($destinations[0]->description ) }}
			</p>
			@if($destinations[0]->what_to_see!='')
			<h2 class="details-sub-head">What to see </h2>	
			<p>
				{{ short($destinations[0]->what_to_see ) }}
			</p>
			@endif
			@if($destinations[0]->how_to_reach!='')
			<h2 class="details-sub-head">How to reach</h2>			
			<p>
				{{ short($destinations[0]->how_to_reach ) }}
			</p>
			@endif
			@if($destinations[0]->when_to_visit!='')
			<h2 class="details-sub-head">When to visit</h2>	
			<p>
				{{ short($destinations[0]->when_to_visit ) }}
			</p>
			@endif			
		</div>
		<div class="col-md-4 col-md-push-1 wow fadeInRight">
			<h2 class="section-title">Travellers Gallery</h2>
			<div class="row">
				@foreach($destinationimage as $image)
				<div class="col-md-4">
					<figure>
					<img src="<?php echo env('IMAGE_SHOW_PATH').env('UPLOADS').$image->image_name;?>"  alt="{{ $image->image_name}}">
					</figure>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection