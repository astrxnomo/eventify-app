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
                @foreach($events->take(4) as $event)
                @include('components.event-card', [
                    'title' => $event->name,
                    'category' => $event->category ? $event->category->name : 'Sin categoría',
                    'image' => $event->img_url,  // Asegúrate de usar img_url aquí
                    'location' => $event->location ? $event->location->country : 'Sin ubicación',
                    'date' => \Carbon\Carbon::parse($event->start_date)->format('d F Y'),
                    'description' => $event->description,
                    'price' => $event->price,
                    'status' => "$event->status_id",
                ])
            @endforeach
                <div class="d-flex align-items-center justify-content-center text-center mb-4">
                    <a href="{{route('explore')}}" class="btn btn-primary text-white fw-semibold">
                        Ver más eventos
                    </a>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-5">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 text-center ">
                    <h2 class="mb-4 fw-bold">¿Cómo unirme a un evento?</h2>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">
                                Paso 1
                            </h4>
                            <p class="card-text">
                                Busca el evento al que te gustaría asistir. Puedes usar la barra de búsqueda para encontrar eventos por nombre, ubicación o categoría.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">
                                Paso 2
                            </h4>
                            <p class="card-text">
                                Una vez que hayas encontrado un evento que te interese, haz clic en el botón "Unirse" o "Comprar ticket" en la página del evento.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 card-hover mb-5">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">
                                Paso 3
                            </h4>
                            <p class="card-text">
                                Completa el proceso de pago y recibirás un correo electrónico con la confirmación de tu ticket. ¡Ahora estás listo para asistir al evento!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
