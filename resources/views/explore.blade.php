@extends('layouts.app')

<title>Eventify | Explorar</title>

@section('content')

<section class="mt-4">
    <div class="container">
        <div class="row">
            <h1 class="fw-bold">
                Explorar
            </h1>
            <hr>
            @foreach(range(1, 12) as $event)
                @include('components.event-card', ['title' => 'QuaranPalooza Livestream Music Fest Fest Fest', 'image' => 'https://storage.googleapis.com/events-images-upload/2024/4/16/428141149/pic_cover_1713296806.2512121.png', 'location' => 'Colombia', 'date' => '11/10/2024', 'badges' => ['Badge 1', 'Badge 2', 'Badge 3'], 'description' => 'The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool.', 'price' => '$125.000', 'available' => true])
            @endforeach
            <div class="d-flex align-items-center justify-content-center text-center mb-5">
                <a href="#" class="btn btn-primary text-white fw-semibold">Ver más eventos</a>
            </div>
        </div>
    </div>
</section>

@endsection
