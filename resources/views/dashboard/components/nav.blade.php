<nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container-fluid justify-content-center">
        <ul class="nav nav-pills  gap-2"  id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="btn btn-primary text-white" role="button" href="{{ url('/dashboard') }}"><i class="bi bi-house-door-fill"></i></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="btn btn-primary text-white fw-semibold" role="button" href="{{ url('/dashboard/events') }}">Mis Eventos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="btn btn-primary text-white fw-semibold" role="button" href="{{ url('/dashboard/tickets') }}">Mis tickets</a>
            </li>
        </ul>
    </div>
</nav>
