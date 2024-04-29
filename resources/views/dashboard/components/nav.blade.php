<nav class="navbar border-bottom">
    <div class="container-fluid justify-content-center">
        <ul class="nav gap-2">
            <li class="nav-item">
                <a class="btn btn-primary text-white d-flex" role="button" href="{{ route('dashboard') }}"><i class="bi bi-house-door-fill bi-lg mt-1 mb-1"></i></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary text-white fw-semibold d-flex " role="button" href="{{ route('dashboard.events') }}">Mis Eventos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary text-white fw-semibold d-flex" role="button" href="{{ route('dashboard.tickets') }}">Mis tickets</a>
            </li>
        </ul>
    </div>
</nav>
