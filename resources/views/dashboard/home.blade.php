@extends('layouts.app')

<title>Eventify | Dashboard</title>

@section('content')

@include('components.dashboard.nav')

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
            <a href="{{ route('events.index') }}" class="text-decoration-none card-hover">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-calendar-alt fa-4x text-primary mb-4"></i>
                            <h4 class="card-title"><strong><i class="bi bi-calendar2-minus-fill me-2"></i>Mis eventos</strong></h4>

                            <p class="card-text text-muted">Administra tus eventos</p>

                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 mb-5 mb-10">
            <a href="{{ route('tickets.index') }}" class="text-decoration-none card-hover">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <i class="fas fa-ticket-alt fa-4x text-primary mb-4"></i>
                            <h4 class="card-title"><strong><i class="bi bi-ticket-fill me-2"></i>Mis tickets</strong></h4>
                            <p class="card-text text-muted">Administra tus tickets</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    @if (Auth::user()->role_id===1)
        <div class="col-12 mb-5">
            <h2 class="text-center fw-bold mb-4">Administración</h2>
            <hr class="my-4">
            <div class="row">
                <div class="col-4 mb-5 mb-lg-0">
                    {{-- <a href="{{ route('events.index') }}" class="text-decoration-none card-hover"> --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fas fa-calendar-alt fa-4x text-primary mb-4"></i>
                                    <h4 class="card-title"><strong><i class="bi bi-calendar-event-fill me-2"></i>Eventos</strong></h4>
                                    <p class="card-text text-muted">Administra los eventos</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-5 mb-lg-0">
                    <a href="{{ route('users.index') }}" class="text-decoration-none card-hover">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fas fa-users fa-4x text-primary mb-4"></i>
                                    <h4 class="card-title"><strong><i class="bi bi-people-fill me-2"></i>Usuarios</strong></h4>
                                    <p class="card-text text-muted">Administra los usuarios</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-5 mb-lg-0">
                    {{-- <a href="{{ route('tickets.index') }}" class="text-decoration-none card-hover"> --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fas fa-ticket-alt fa-4x text-primary mb-4"></i>
                                    <h4 class="card-title"><strong><i class="bi bi-ticket-perforated-fill me-2"></i>Tickets</strong></h4>
                                    <p class="card-text text-muted">Administra los tickets</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-5 mb-lg-0">
                    <a href="{{ route('categories.index') }}" class="text-decoration-none card-hover">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fas fa-ticket-alt fa-4x text-primary mb-4"></i>
                                    <h4 class="card-title"><strong><i class="bi bi-people-fill me-2"></i>Categorias</strong></h4>
                                    <p class="card-text text-muted">Administra las categorias</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-5 mb-lg-0">
                    <a href="{{ route('status.index') }}" class="text-decoration-none card-hover">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <i class="fas fa-list-alt fa-4x text-primary mb-4"></i>
                                    <h4 class="card-title"><strong><i class="bi bi-people-fill me-2"></i>Estados</strong></h4>
                                    <p class="card-text text-muted">Administra los estados</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    @endif

</section>

@endsection
