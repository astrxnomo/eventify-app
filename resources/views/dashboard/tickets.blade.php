@extends('layouts.app')

<title>Dashboard | Tickets</title>

@section('content')

@include('components.dashboard.nav')

<section class="container mb-5">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="fw-bold">Mis tickets</h1>
            <hr class="mt-0">
            <div class="row">
                @foreach (range(1,4) as $card)
                    @include('components.dashboard.ticket-card', ['url' => '#', 'title' => 'QuaranPalooza Lives a Music Fest Fest Fest', 'badges' => ['Concierto', 'Cine', 'Teatro'], 'image' => 'https://storage.googleapis.com/events-images-upload/2024/4/16/428141149/pic_cover_1713296806.2512121.png', 'location' => 'Colombia', 'date' => '11/10/2024', 'purchaseDate' => '20/04/2024', 'ticketCount' => 1, 'price' => '$125.000', 'status' => true, 'qrCodeUrl' => 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example'])
                    @include('components.dashboard.ticket-card', ['url' => '#', 'title' => 'QuaranPalooza', 'badges' => ['Concierto', 'Cine', 'Teatro'], 'image' => 'https://storage.googleapis.com/events-images-upload/2024/4/16/428141149/pic_cover_1713296806.2512121.png', 'location' => 'Colombia', 'date' => '11/10/2024', 'purchaseDate' => '20/04/2024', 'ticketCount' => 1, 'price' => '$125.000', 'status' => true, 'qrCodeUrl' => 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example'])

                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
