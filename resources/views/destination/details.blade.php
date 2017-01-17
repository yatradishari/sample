@section('title') Destination Details @stop
@extends('app')

@section('content')
<div class="row">
    <div class="col-md-7 wow fadeInLeft">
        <h2 class="section-title">Destination Name</h2>
        <figure>
            <img src="{{ URL::to('/front/dummy/figure-1.jpg') }}" alt="">
        </figure>

        <p>Amazing Spider-Man is the cornerstone of the Marvel Universe. Earths Mightiest Heroes reunite with their biggest guns at the forefront to take on familiar enemies and new threats alike. The Avengers return. Looking for the one superhero comic you just have to read.</p>

        <p>Iron Man, Thor, Captain America and the rest of Earths Mightiest Heroes unite to stand against the threats none can face alone. See the Avengers go up against Ultron, Kang, the Masters of Evil and more over three decades of epic action. This is where youll find all the big-time action, major storylines and iconic Spider-Man magic youd come to expect from the Wall-Crawler. Meet all of Spideys deadly enemies, from the Green Goblin and Doctor Octopus to Venom and Carnage, plus see Peter Parker fall in love, face tragedy and triumph, and learn that with great power comes great responsibility.</p>

        <p>Caught in a gamma bomb explosion while trying to save the life of a teenager, Dr. Bruce Banner was transformed into the incredibly powerful creature called the Hulk. Avengers Assemble. Featuring the work of Kurt Busiek, George Perez and other quintessential Avengers creators. Earths Mightiest Heroes reunite with their biggest guns at the forefront to take on familiar enemies and new threats alike.</p>
    </div>
    <div class="col-md-4 col-md-push-1 wow fadeInRight">
        <h2 class="section-title">Principle</h2>
        <a href="#" class="boxed-link">Proin placeat condinemtum nulla</a>
        <a href="#" class="boxed-link">Gamma bomb explosion while trying</a>
        <a href="#" class="boxed-link">Perez and other quintessential</a>
        <a href="#" class="boxed-link">Take on familiar enemies</a>
        <a href="#" class="boxed-link">Avengers go up against Ultron</a>

    </div>
</div>
@endsection
