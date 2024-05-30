<nav class="navbar border-bottom">
    <div class="container-fluid justify-content-center">
        <ul class="nav gap-2">
            <li class="nav-item">
                <a class="btn btn-primary text-white d-flex" role="button" href="{{ route('dashboard') }}">
                    <i class="bi bi-house-door-fill bi-lg mt-1 mb-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary text-white fw-semibold d-flex " role="button" href="{{ route('dashboard.events.index') }}">
                    <i class="bi bi-calendar2-minus-fill mt-1 me-2"></i>
                    Mis Eventos
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary text-white fw-semibold d-flex" role="button" href="{{ route('dashboard.tickets.index') }}">
                    <i class="bi bi-ticket-fill mt-1 me-2"></i>
                    Mis tickets
                </a>
            </li>
        </ul>
    </div>
</nav>
