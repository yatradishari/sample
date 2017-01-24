@section('title') Holiday Homes in {{ $data[0]->state_name->name }} @stop
@extends('app')

@section('content')
    <!-- <div class="filter-links filterable-nav">
        <select class="mobile-filter">
            <option value="*">Show all</option>
            <option value=".south-america">Popular</option>
            <option value=".asia">Offbeat</option>            
        </select>
        <a href="#" class=" current wow fadeInRight" data-filter="*">Show all</a>
        <a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".south-america">Popular</a>
        <a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".asia">Offbeat</a>        
    </div> -->
    <div class="filterable-items">
        @foreach($data as $destination)
        <div class="filterable-item {{ ($destination->id == 5) ? ' asia' : 'south-america' }}">
            <a href="{{ url('/holidayhomes/'.$destination->state_name->id) }}">
                <article class="offer-item ">
                    <figure class="state-item">
                        @if($destination->state_name->image=="")
                            <img src="{{ URL::to('/default_icon/no_photo.jpg') }}" alt="{{ $destination->state_name->name }}">
                        @else
                            <img src="{{ URL::to('/uploads/state/'.$destination->state_name->image) }}" alt="{{ $destination->state_name->name }}">
                        @endif
                        
                    </figure>
                    <h2 class="entry-title"><a href="{{ url('/destinations/details/'.$destination->id) }}">{{ $destination->location_name}}</a></h2>
                    <p>{{ short($destination->description ) }}</p>
                    <div class="price">                    
                        <i class="fa fa-map-marker" aria-hidden="true"></i><small> {{ $destination->state_name->name }}</small>
                    </div>
                </article>
            </a>
        </div>
        @endforeach        
    </div>

    <!--Pagination Start--> 
    @include('pagination.default', ['paginator' => $data]) 
    <!--Pagination End-->     
@endsection
