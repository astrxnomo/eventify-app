<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', ])

    @if (Route::currentRouteName() == 'dashboard.event.edit' || Route::currentRouteName() == 'dashboard.event.create')
        @vite('resources/js/event-data-preview.js')
    @endif

    @if (Route::currentRouteName() == 'event.show')
        @vite('resources/js/ticket-purchase.js')
    @endif

</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        <header class="py-2 bg-body-tertiary border-bottom sticky-top">
            <div class="container">
                <nav class="d-flex flex-wrap align-items-center justify-content-center ">
                    <a class="navbar-brand fs-4 fw-bold ms-3" href="{{ route('home') }}">
                        Eventi<span class="text-primary">fy</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('home') }}" class="nav-link px-2 link-body-emphasis">Inicio</a></li>
                        <li><a href="{{route('explore')}}" class="nav-link px-2 link-body-emphasis">Explorar</a></li>
                        <li><a href="{{route('explore')}}" class="nav-link px-2 link-body-emphasis">Nosotros</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-none d-sm-block" role="search">
                        <input type="search" class="form-control" placeholder="Buscar eventos..." aria-label="Search" control-id="ControlID-2">
                    </form>

                    @guest
                        <div class="nav col-lg-auto justify-content-start mb-md-0">
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn btn-primary text-white fw-semibold" role="button">Iniciar sesión</a>
                            </li>
                        @endif
                        </div>
                    @else
                        <div class="btn-group">
                            <a href="/dashboard" class="btn btn-primary text-white fw-semibold">
                                <i class="bi bi-person-circle"></i>
                                {{ Auth::user()->name }}
                            </a>

                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split text-white" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><h6 class="dropdown-header">Eventos</h6></li>
                                <li><a class="dropdown-item d-flex gap-2 align-items-center" href="{{ route('dashboard.events.index') }}"><i class="bi bi-calendar2-plus-fill text-primary"></i> Crear evento</a></li>
                                <li><a class="dropdown-item d-flex gap-2 align-items-center" href="{{ route('dashboard.events.index') }}"><i class="bi bi-calendar2-minus-fill text-primary"></i> Mis eventos</a></li>

                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Tickets</h6></li>
                                <li><a class="dropdown-item d-flex gap-2 align-items-center" href="{{ route('dashboard.tickets.index') }}"><i class="bi bi-ticket-fill text-primary"></i> Mis tickets</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Cuenta</h6></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-door-closed-fill me-2 text-primary"></i>{{ __('Cerrar sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </nav>
            </div>
        </header>

        <main class="flex-fill ">
            @yield('content')
        </main>

        <footer class="py-3 border-top">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center">
                <li><a href="{{ route('home') }}" class="nav-link px-2 link-body-emphasis">Inicio</a></li>
                <li><a href="{{ route('explore') }}" class="nav-link px-2 link-body-emphasis">Explorar</a></li>
                <li><a href="{{ route('explore') }}" class="nav-link px-2 link-body-emphasis">Nosotros</a></li>
            </ul>
            <p class="text-center fw-bold fs-5">Eventi<span class="text-primary">fy</span></p>
        </footer>
    </div>

</body>

</html>
