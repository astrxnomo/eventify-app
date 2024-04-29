@extends('layouts.app')

<title>Dashboard | Tickets</title>

@section('content')

@include('dashboard.components.nav')

<section class="container mb-5">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="fw-bold">Mis tickets</h1>
            <hr class="mt-0">
            <div class="row">
                @foreach (range(1,4) as $card)
                <div class="col-md-3 mb-4">
                    <a href="#" class="text-decoration-none text-dark card-hover ">
                        <div class="card ">
                            <div class="card-body">


                                <div class="buy d-flex justify-content-between align-items-center ">
                                    <h4 class="card-title fw-bold custom-truncate">QuaranPalooza Livestream Music Fest Fest Fest</h4>
                                </div>

                                <div class="row">
                                    <div class="col mb-2">
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Concierto</span>
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Cine</span>
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Teatro</span>
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Concierto</span>
                                    </div>
                                </div>

                                <img class="card-img" src="https://storage.googleapis.com/events-images-upload/2024/4/16/428141149/pic_cover_1713296806.2512121.png" alt="Vans">

                                <div class="d-flex justify-content-between mt-3">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0"><span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill mb-2"><i class="bi bi-geo-alt-fill me-1"></i>Colombia</span></h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0"><span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill mb-2"><i class="bi bi-calendar2-event-fill me-1"></i>11/10/2024</span></h6>
                                    </div>
                                </div>

                                <hr class="mt-1">

                                <div class="buy d-flex justify-content-between align-items-center mt-3">
                                    <h4 class="card-title fw-bold custom-truncate">Datos de compra</h4>
                                </div>

                                <div class="row">
                                    <div class="col mb-2">
                                        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill mb-2"><i class="bi bi-person-square me-1"></i>{{ auth()->user()->name }}</span>
                                        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill mb-2"><i class="bi bi-calendar2-event-fill me-1"></i>20/04/2024</span>
                                        <h6><span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill mb-2"><i class="bi bi-ticket-fill me-1"></i>x1 Ticket</span></h6>
                                    </div>
                                </div>

                                <div class="buy d-flex justify-content-between align-items-center">
                                    <h4 class="text-dark fw-semibold">$125.000</h4>
                                    <h5 class="mb-0"><span class="badge text-bg-success badge-hover mb-2">Vigente</span></h5>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example" alt="QR Code">
                                </div>

                                <hr>
                                <div class="buy d-flex flex-row justify-content-between align-items-center gap-2">
                                    <button class="btn btn-success fw-bold col"><i class="bi bi-download me-2"></i>Descargar</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
