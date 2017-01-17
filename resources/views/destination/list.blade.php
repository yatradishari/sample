@section('title') Destination @stop
@extends('app')

@section('content')
    <div class="filter-links filterable-nav">
        <select class="mobile-filter">
            <option value="*">Show all</option>
            <option value=".south-america">Popular</option>
            <option value=".asia">Offbeat</option>            
        </select>
        <a href="#" class=" current wow fadeInRight" data-filter="*">Show all</a>
        <a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".south-america">Popular</a>
        <a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".asia">Offbeat</a>        
    </div>
    <div class="filterable-items">
        @foreach($destinations as $destination)
        <div class="filterable-item south-america">
            <article class="offer-item">
                <figure class="featured-image">
                    @if($destination->primary_image['image_name']=="")
                        <img src="{{ URL::to('/default_icon/no_photo.jpg') }}" alt="{{$destinations[0]->location_name}}">
                    @else
                        <img src="{{ URL::to('/uploads/destination/'.$destination->primary_image['image_name']) }}" alt="{{$destinations[0]->location_name}}">
                    @endif
                    
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/'.$destination->id) }}">{{ $destination->location_name}}</a></h2>
                <p>{{ short($destination->description ) }}</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
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
@endsection
