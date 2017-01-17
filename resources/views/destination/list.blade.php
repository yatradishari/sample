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
        <div class="filterable-item south-america">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-1.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item asia">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-2.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item africa">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-3.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item north-america">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-1.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item europe">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-2.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item australia">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-3.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item south-america">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-1.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item asia">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-2.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item africa">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-3.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item north-america">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-1.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item europe">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-2.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
        <div class="filterable-item australia">
            <article class="offer-item">
                <figure class="featured-image">
                    <img src="../public/front/dummy/offer-thumbnail-3.jpg" alt="">
                </figure>
                <h2 class="entry-title"><a href="{{ url('/destinations/details/1') }}">Efficitur efficitur convallis</a></h2>
                <p>Sed vitae fermentum lacus in augue massa pellentesque mauris vel iaculis sclerisque nulla</p>
                <div class="price">
                    <strong>$2900</strong>
                    <small>/10 days</small>
                </div>
            </article>
        </div>
    </div>

    <div class="pagination wow fadeInUp">
        <span class="page-numbers current">1</span>
        <a href="#" class="page-numbers">2</a>
        <a href="#" class="page-numbers">3</a>
        <a href="#" class="page-numbers">4</a>
    </div>
@endsection
