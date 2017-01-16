<div class="slider">
	<ul class="slides">
		@foreach($banners as $banner)
		<li data-background="{{env('UPLOADS')}}/banners/{{$banner->banners_name}}">
			<div class="container">
				<div class="slide-caption col-md-4">
					<h2 class="slide-title">Venenatis felis pulvinar ultrices</h2>
					<p>Consectetur adipisicing elit. Dignissimos fuga eos nihil repellat et enim, neque, aliquid delectus quia hic praesentium sit, repudiandae pariatur deleniti vero.</p>
				</div>
			</div>
		</li>
		@endforeach
		
	</ul>
	<div class="flexslider-controls">
		<div class="container">
			<ol class="flex-control-nav">
				@for($i=1; $i<=count($banners); $i++)
				<li><a>{{$i}}</a></li>
				@endfor				
			</ol>
		</div>
	</div>
</div>