@extends('layouts.app')

<title>Evento | {{$event->name}}</title>

@section('content')

<section class="container mb-5">

    <div class="row mt-4">
        <div class="col-12 col-md-8 mb-4">

            @if(auth()->check() && $event->user_id == auth()->id())
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <i class="bi bi-calendar-check-fill me-1"></i>
                    <strong>Este evento es tuyo, puedes editarlo en el <a href="{{route('dashboard.events.index')}}" class="link-dark">dashboard.</a></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-x-circle-fill"></i>
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h1 class="card-title fw-bold title-truncate fs-3">
                            {{ $event->name }}
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col badge-container">
                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2 ">
                                {{ $event->category->name }}
                            </span>
                        </div>
                    </div>

                    <img id="event-img" class="card-img img-fluid" src="{{ asset('storage/' . $event->img_url) }}" alt="Imagen del evento">

                    <div class="d-flex align-items-center mt-3">
                        <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                            <i class="bi bi-calendar2-event-fill me-1"></i>
                            <span>{{ \Carbon\Carbon::parse($event->date)->format('d F Y, h:i A') }}</span>
                        </span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex align-items-center flex-wrap">
                            <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2 me-1">
                                <i class="bi bi-geo-alt-fill mt-1"></i>
                                <span>{{ $event->location->country}}, {{ $event->location->region}}, {{ $event->location->city}}</span>
                            </span>

                            <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                                <i class="bi bi-map-fill me-1"></i>
                                <span>{{ $event->location->address}}</span>
                            </span>
                        </div>

                    </div>
                    <p class="card-text ">
                        {{ $event->description }}
                    </p>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">

                    <h2 class="fw-bold fs-4">
                        Comprar tickets

                    </h2>
                    <form action="{{ route('ticket.store')}}" method="post" class="mb-0">
                        @csrf

                        @guest
                            <div class="form-group mb-3">
                                <div class="form-group mb-1 row">
                                    <div class="col-md-6">
                                        <label for="total">Precio</label>
                                        <h4 id="eventPrice" class="font-weight-bold">${{$event->price}}</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="availableTickets">Tickets disponibles</label>
                                        <h4 id="availableTickets" class="font-weight-bold"><i class="bi bi-ticket-fill me-2"></i>{{$event->capacity}}</h4>
                                    </div>
                                </div>

                                <label for="quantity">Cantidad</label>

                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-ticket-fill"></i></span>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="1" step="1" min="1" max="{{$event->capacity}}" required>
                                </div>

                                <div class="form-group mb-1">

                                </div>
                            </div>

                            <hr>
                            <div class="form-group mb-3">
                                <label for="total">Total a pagar</label>
                                <h3 id="total" class="font-weight-bold">${{$event->price}}</h3>
                            </div>

                            <a href="{{ route('login') }}">
                                <button class="btn btn-primary text-white fw-semibold w-100">
                                    Inicia sesión para comprar tickets
                                </button>
                            </a>
                        @else
                            @if ($event->capacity == 0)
                                <div class="form-group mb-2">

                                    <div class="form-group mb-1 row">
                                        <div class="col-md-6">
                                            <label for="total">Precio</label>
                                            <h4 id="eventPrice" class="font-weight-bold">${{$event->price}}</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="availableTickets">Tickets disponibles</label>
                                            <h4 id="availableTickets" class="font-weight-bold"><i class="bi bi-ticket-fill me-2"></i>{{$event->capacity}}</h4>
                                        </div>
                                    </div>

                                    <label for="quantity">Cantidad</label>

                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-ticket-fill"></i></span>
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="0" max="0" min="0" disabled>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group mb-3">
                                    <label for="total">Total a pagar</label>
                                    <h3 id="total" class="font-weight-bold">$0</h3>
                                </div>

                                <button type="button" class="btn btn-primary text-white fw-semibold w-100 mb-2" disabled><i class="bi bi-exclamation-circle me-1"></i>Tickets agotados</button>
                            @else
                                <div class="form-group mb-3">
                                    <div class="form-group mb-1 row">
                                        <div class="col-md-6">
                                            <label for="total">Precio</label>
                                            <h4 id="eventPrice" class="font-weight-bold">${{number_format($event->price)}}</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="availableTickets">Tickets disponibles</label>
                                            <h4 id="availableTickets" class="font-weight-bold"><i class="bi bi-ticket-fill me-2"></i>{{$event->capacity}}</h4>
                                        </div>
                                    </div>

                                    <label for="quantity">Cantidad</label>

                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-ticket-fill"></i></span>
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="1" step="1" min="1" max="{{$event->capacity}}" required>
                                    </div>

                                    <div class="form-group mb-1">

                                    </div>
                                </div>

                                <hr>
                                <div class="form-group mb-3">
                                    <label for="total">Total a pagar</label>
                                    <h3 id="total" class="font-weight-bold">${{number_format($event->price)}}</h3>
                                </div>

                                <input type="hidden" name="event_id" value="{{$event->id}}" >
                                <button type="submit" class="btn btn-primary text-white fw-semibold w-100">Comprar</button>
                            @endif
                        @endguest
                    </form>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection
