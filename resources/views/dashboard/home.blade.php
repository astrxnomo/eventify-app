@extends('layouts.app')

@section('content')

@include('dashboard.components.nav')

<section class="container mb-5">
    <div class="row mt-5 text-center align-items-end">
        <div class="col-lg-12">
            <h1 class="display-4 fw-bold">Bienvenido al Dashboard</h1>
            <p class="lead">Administra tus eventos y tickets desde aquí</p>
            <hr class="my-4">
        </div>
    </div>
    <div class="row">
        <div class="col-6 mb-5 mb-lg-0">
            <a href="{{ route('dashboard.events') }}" class="text-decoration-none card-hover">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-calendar-alt fa-4x text-primary mb-4"></i>
                            <h4 class="card-title"><strong><i class="bi bi-calendar-event me-2"></i>Mis eventos</strong></h4>

                            <p class="card-text text-muted">Administra tus eventos</p>

                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 mb-5 mb-lg-0">
            <a href="{{ route('dashboard.tickets') }}" class="text-decoration-none card-hover">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-ticket-alt fa-4x text-primary mb-4"></i>
                            <h4 class="card-title"><strong><i class="bi bi-ticket-perforated me-2"></i>Mis tickets</strong></h4>
                            <p class="card-text text-muted">Administra tus tickets</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection
