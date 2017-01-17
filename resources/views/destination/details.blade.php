@section('title') {{ $destinations[0]->location_name}} @stop
@extends('app')

@section('content')
<div class="row">
    <div class="col-md-7 wow fadeInLeft">
        <h2 class="section-title">{{ $destinations[0]->location_name}}</h2>
        <figure>            
            @if($destinations[0]->primary_image->image_name=="")
                <img src="{{ URL::to('/default_icon/no_photo.jpg') }}" alt="{{$destinations[0]->location_name}}">
            @else
                <img src="{{ URL::to('/uploads/destination/'.$destinations[0]->primary_image->image_name) }}" alt="{{$destinations[0]->location_name}}">
            @endif
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
