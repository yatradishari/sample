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
            <a href="https://www.facebook.com/sharer.php?caption={{ $destinations[0]->location_name}}&description={{ $destinations[0]->description}}&u={{ env('SITE_URL') }}&picture={{ env('SITE_URL') }}" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
            </a>
           
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
            </a>
           
            <!-- Twitter -->
            <a href="https://twitter.com/share?url={{Request::url()}}&amp;text={{ $destinations[0]->location_name}}&amp;hashtags=simplesharebuttons" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
            </a>
           
            <!-- Email -->
            <a href="mailto:?Subject=Simple Share Buttons&amp;Body={{ $destinations[0]->location_name}}">
                <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
            </a>
            
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
            {{ $destinations[0]->state_name->name }}
        </p>
        <p>
            <div class="row">
                <div class="container">
                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-1">Overview</li>
                        <li class="tab-link" data-tab="tab-2">How to Reach</li>
                        <li class="tab-link" data-tab="tab-3">When to Visit</li>
                        <li class="tab-link" data-tab="tab-4">Accommodation</li>
                        <li class="tab-link" data-tab="tab-5">Food</li>
                        <li class="tab-link" data-tab="tab-6">Photo</li>
                        
                    </ul>

                    <div id="tab-1" class="tab-content current">
                        {{ $destinations[0]->description }}
                    </div>
                    <div id="tab-2" class="tab-content">
                         {{ $destinations[0]->how_to_reach }}
                    </div>
                    <div id="tab-3" class="tab-content">
                        {{ $destinations[0]->when_to_visit }}
                    </div>
                    <div id="tab-4" class="tab-content">
                        Accommodation
                    </div>
                    <div id="tab-5" class="tab-content">
                        Food
                    </div>
                    <div id="tab-6" class="tab-content">
                        Photo
                    </div>

                </div><!-- container -->
            </div>
        </p>
        
    </div>
    <div class="col-md-4 col-md-push-1 wow fadeInRight">
        <h2 class="section-title">More Information</h2>
        <div>How to Reach</div>
        <a href="javascript:void(0);" class="boxed-link" style="background:none;">
            
            {{ $destinations[0]->how_to_reach }}
        </a>
        <div>When to Visit</div>
        <a href="javascript:void(0);" class="boxed-link">
            {{ $destinations[0]->when_to_visit }}
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
    
    $(document).ready(function(){
        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        })
    })
</script>


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=9df0421a-9071-4855-b1d8-46d904007c2b"></script>
<script type="text/javascript">stLight.options({publisher: "9df0421a-9071-4855-b1d8-46d904007c2b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
@endsection
@section('style')
<style>
    body{
			margin-top: 100px;
			font-family: 'Trebuchet MS', serif;
			line-height: 1.6
		}
		.container{
			margin: 0 auto;
		}
		ul.tabs{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tabs li{
			background: none;
			color: #222;
			display: inline-block;
			padding: 10px 15px;
			cursor: pointer;
		}

		ul.tabs li.current{
			background: #ededed;
			color: #222;
		}

		.tab-content{
			display: none;
			background: #ededed;
			padding: 15px;
		}

		.tab-content.current{
			display: inherit;
		}
</style>
@endsection


