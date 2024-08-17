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
            @foreach ($events as $event)
                @include('components.event-card', [
                    'title' => $event->name,
                    'category' => $event->category->name,
                    'image' => $event->image,
                    'location' => $event->location->country,
                    'date' => \Carbon\Carbon::parse($event->start_date)->format('d F Y'),
                    'description' => $event->description,
                    'price' => $event->price,
                    'status' => "$event->status_id",
                ])
            @endforeach
            <div class="d-flex align-items-center justify-content-center text-center mb-5">
                <a href="#" class="btn btn-primary text-white fw-semibold">Ver más eventos</a>
            </div>
        </div>
    </div>
</section>

@endsection
