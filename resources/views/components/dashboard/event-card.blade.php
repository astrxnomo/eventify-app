<div class="col-md-6 col-lg-3 mb-4">
    <a href="{{ $url }}" class="text-decoration-none text-dark card-hover">
        <div class="card">
            <div class="card-body">

                <div class="buy d-flex justify-content-between align-items-center">
                    <h4 class="card-title fw-bold title-truncate">
                        {{ $title }}
                    </h4>
                </div>

                <div class="row">
                    <div class="col">
                        @foreach($badges as $badge)
                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                                {{ $badge }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <img class="card-img" src="{{ $image }}" alt="Vans">


                <div class="d-flex justify-content-between mt-3">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill mb-2">
                            <i class="bi bi-geo-alt-fill me-1"></i>
                            {{ $location }}
                        </span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill mb-2">
                            <i class="bi bi-calendar2-event-fill me-1"></i>
                            {{ $date }}
                        </span>
                    </div>
                </div>


                <p class="card-text description-truncate">
                    {{ $description }}
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-dark fw-semibold">
                        {{ $price }}
                    </h4>
                    <h5 class="mb-0">
                        <span class="badge {{ $available ? 'text-bg-success' : 'text-bg-danger' }} badge-hover mb-2">
                            {{ $available ? 'Disponible' : 'No Disponible' }}
                        </span>
                    </h5>
                </div>

                <hr>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <button type="button" class="btn btn-success fw-bold col me-2" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bi bi-pencil-square me-1"></i>
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger fw-bold col" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="bi bi-trash3 me-1"></i>
                        Borrar
                    </button>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
</div>

<!-- Modal Borrar -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Borrar Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
</div>
