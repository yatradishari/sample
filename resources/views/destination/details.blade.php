@section('title') {{ $destinations[0]->location_name}} @stop
@section('social_share') 
<!-- Open Graph data -->
<meta property="og:title" content="zz{{ $destinations[0]->location_name}}" />
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
            <!-- Facebook -->
            <a href="https://www.facebook.com/sharer.php?caption={{ $destinations[0]->location_name}}&description={{ $destinations[0]->description}}&u={{ env('SITE_URL') }}&picture={{ env('SITE_URL') }}" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
           
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>
           
            <!-- Twitter -->
            <a href="https://twitter.com/share?url={{Request::url()}}&amp;text={{ $destinations[0]->location_name}}&amp;hashtags=simplesharebuttons" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
           
            <!-- Email -->
            <a href="mailto:?Subject=Simple Share Buttons&amp;Body={{ $destinations[0]->location_name}}"><img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" /></a>
            
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
        <p> 
            {!! get_location($destinations[0]->id) !!}            
        </p>
        <p>
            <div class="row">
                @include('includes.destination_sub_menu')
            </div>
        </p>
        
    </div>
    <div class="col-md-4 col-md-push-1 wow fadeInRight">
        <h2 class="section-title"></h2>
        <div>Plan Your Trip</div>
        <div>
            <span></span>
        </div>
        <div>
            <span></span>
        </div>
        <div>
            <span></span>
        </div>
        <div>
            <span></span>
        </div>
        
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


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=9df0421a-9071-4855-b1d8-46d904007c2b"></script>
<script type="text/javascript">stLight.options({publisher: "9df0421a-9071-4855-b1d8-46d904007c2b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
@endsection
