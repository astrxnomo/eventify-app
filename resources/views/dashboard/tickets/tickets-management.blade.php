@extends('layouts.app')

<title>Dashboard | Tickets</title>

@section('content')

@include('components.dashboard.nav')

<section class="container mb-5">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="fw-bold">
                Mis tickets
            </h1>
            <hr class="mt-0">

            <div class="row">
                @if ($tickets->isEmpty())
                <h2 class="mt-5 text-center opacity-50">No tienes tickets</h2>
                @else
                    @foreach ($tickets as $ticket)
                        @include('components.dashboard.ticket-card', [
                            'title' => $ticket->event->name,
                            'category' => $ticket->event->category->name,
                            'image' => $ticket->event->image,
                            'location' => $ticket->event->location->country,
                            'date' => \Carbon\Carbon::parse($ticket->event->date)->format('d F Y'),
                            'description' => $ticket->event->description,
                            'price' => $ticket->event->price,
                            'status' => $ticket->status,
                            'quantity' => $ticket->quantity,
                            'purchaseDate'=> $ticket->created_at,
                        ])
                    @endforeach
                @endif
            </div>

        </div>
    </div>
</section>

@endsection
