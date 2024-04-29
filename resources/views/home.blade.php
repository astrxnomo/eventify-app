@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

    <section class="mt-5 d-flex align-items-center justify-content-center text-center">
        <div>
            <h1 class="display-4 fw-bold">Explora eventos del mundo</h1>
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
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="#" class="text-decoration-none text-dark card-hover">
                            <div class="card">
                                <div class="card-body">
                                    <div class="buy d-flex justify-content-between align-items-center ">
                                        <h4 class="card-title fw-bold custom-truncate">QuaranPalooza Livestream Music Fest Fest Fest</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col ">
                                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2">Concierto</span>
                                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2">Cine</span>
                                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2">Teatro</span>
                                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2">Concierto</span>
                                        </div>
                                    </div>

                                    <img class="card-img" src="https://storage.googleapis.com/events-images-upload/2024/4/16/428141149/pic_cover_1713296806.2512121.png" alt="Vans">

                                    <div class="d-flex justify-content-between mt-3">
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0"><span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill mb-2"><i class="bi bi-geo-alt-fill me-1"></i>Colombia</span></h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0"><span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill mb-2"><i class="bi bi-calendar2-event-fill me-1"></i></i>11/10/2024</span></h6>
                                        </div>
                                    </div>


                                    <p class="card-text custom-truncate ">
                                        The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool.
                                    </p>



                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <h4 class="text-dark fw-semibold">$125.000</h4>
                                        <h5 class="mb-0"><span class="badge text-bg-success badge-hover mb-2">Disponible</span></h5>
                                    </div>


                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="d-flex align-items-center justify-content-center text-center mb-4">
                    <a href="{{route('events')}}" class="btn btn-primary text-white fw-semibold">Ver más eventos</a>
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
                            <h4 class="card-title fw-bold">Paso {{$card}}</h4>
                            <p class="card-text">
                                Aquí va la descripción de cómo unirse a un evento en el paso {{$card}}.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Paso {{$card}}</h4>
                            <p class="card-text">
                                Aquí va la descripción de cómo unirse a un evento en el paso {{$card}}.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover"">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Paso {{$card}}</h4>
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
