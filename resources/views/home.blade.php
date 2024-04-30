@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

    <section class="mt-5 d-flex align-items-center justify-content-center text-center">
        <div>
            <h1 class="display-4 fw-bold">
                Explora eventos del mundo
            </h1>

            <p class="lead">
                ¡Encuentra el evento perfecto para ti!
            </p>
        </div>
    </section>

    <section class="mt-4">
        <div class="container">
            <div class="row">
                <hr>
                @foreach(range(1, 4) as $card)
                @include('components.event-card', ['title' => 'QuaranPalooza Livestream Music Fest Fest Fest', 'image' => 'https://storage.googleapis.com/events-images-upload/2024/4/16/428141149/pic_cover_1713296806.2512121.png', 'location' => 'Colombia', 'date' => '11/10/2024', 'badges' => ['Badge 1', 'Badge 2', 'Badge 3'], 'description' => 'The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool.', 'price' => '$125.000', 'available' => true])
                @endforeach
                <div class="d-flex align-items-center justify-content-center text-center mb-4">
                    <a href="{{route('events')}}" class="btn btn-primary text-white fw-semibold">
                        Ver más eventos
                    </a>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-4 bg-body-border">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">
                                Paso {{$card}}
                            </h4>
                            <p class="card-text">
                                Aquí va la descripción de cómo unirse a un evento en el paso {{$card}}.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">
                                Paso {{$card}}
                            </h4>
                            <p class="card-text">
                                Aquí va la descripción de cómo unirse a un evento en el paso {{$card}}.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover"">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">
                                Paso {{$card}}
                            </h4>
                            <p class="card-text">
                                Aquí va la descripción de cómo unirse a un evento en el paso {{$card}}.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
