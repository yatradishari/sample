@section('title') {{ $destinations[0]->location_name}} @stop
@section('social_share') 
<!-- Open Graph data -->
<meta property="og:title" content="{{ $destinations[0]->location_name}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.example.com/" />
<meta property="og:image" content="http://example.com/image.jpg" />
<meta property="og:description" content="Description Here" /> 
<!-- //Open Graph data -->
@stop
@extends('app')

@section('content')
<div class="row">
    <div class="col-md-7 wow fadeInLeft">
        <h2 class="section-title">{{ $destinations[0]->location_name}}</h2>
        <figure>   
            <ul class="bxslider">
              @foreach($destinationimage as $images)
              <li>                
                @if($images->image_name=="")
                    <img src="{{ URL::to('/default_icon/no_photo.jpg') }}" alt="{{$destinations[0]->location_name}}">
                @else
                    <img src="{{ URL::to('/uploads/destination/'.$images->image_name) }}" alt="{{$images->image_name}}">
                @endif
              </li>
              @endforeach              
            </ul>

            
        </figure>
        <p>{{ short($destinations[0]->how_to_reach ) }}</p>
        <p>{{ short($destinations[0]->description ) }}</p>
        
    </div>
    <div class="col-md-4 col-md-push-1 wow fadeInRight">
        <h2 class="section-title">More Information</h2>
        <a href="javascript:void(0);" class="boxed-link" style="background:none;">
            {{ short($destinations[0]->state_name->name ) }}
        </a>
        <a href="javascript:void(0);" class="boxed-link">
            {{ short($destinations[0]->when_to_visit ) }}
        </a>
    </div>
</div>
@endsection
@section('script')
<!-- bxSlider Javascript file -->
<script src="{{ asset('/front/slider/jquery.bxslider.js') }}"></script>
<!-- bxSlider CSS file -->
<link href="{{ asset('/front/slider/jquery.bxslider.css') }}" rel="stylesheet" />

<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            auto: false,
            autoControls: true
        });
    });
</script>
@endsection


