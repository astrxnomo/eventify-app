@extends('layouts.app')

<title>Dashboard | Eventos</title>

@section('content')

@include('components.dashboard.nav')

<section class="container mb-5">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="fw-bold">
                Mis eventos
            </h1>
            <hr class="mt-0">

            <a href="{{route('dashboard.event.create')}}">
                <button class="btn btn-primary btn-lg mb-3 w-100 text-white fw-bold">
                    <i class="bi bi-plus-square-fill me-2"></i>
                    Crear evento
                </button>
            </a>

            <div class="row">
                @if ($events->isEmpty())
                    <h2 class="mt-5 text-center opacity-50">No has creado eventos</h2>
                @else
                    @foreach ($events as $event)
                        @include('components.dashboard.event-card', [
                            'title' => $event->name,
                            'category' => $event->category ? $event->category->name : 'Sin categoría',
                            'image' => $event->img_url,  // Asegúrate de que esta propiedad exista
                            'location' => $event->location ? $event->location->country : 'Sin ubicación',
                            'date' => \Carbon\Carbon::parse($event->start_date)->format('d F Y'),
                            'description' => $event->description,
                            'price' => $event->price,
                            'status' => "$event->status_id",
                        ])
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
