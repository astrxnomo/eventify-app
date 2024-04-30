<div class="col-md-6 col-lg-3 mb-4">
    <a href="#" class="text-decoration-none text-dark card-hover">
        <div class="card">
            <div class="card-body">

                <div class="buy d-flex justify-content-between align-items-center ">
                    <h4 class="card-title fw-bold title-truncate">
                        {{ $title }}
                    </h4>
                </div>

                <div class="row">
                    <div class="col ">
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


                <p class="card-text description-truncate ">
                    {{ $description }}
                </p>

                <div class="buy d-flex justify-content-between align-items-center">
                    <h4 class="text-dark fw-semibold">
                        {{ $price }}
                    </h4>
                    <h5 class="mb-0">
                        <span class="badge {{ $available ? 'text-bg-success' : 'text-bg-danger' }} badge-hover mb-2">
                            {{ $available ? 'Disponible' : 'No Disponible' }}
                        </span>
                    </h5>
                </div>

            </div>
        </div>
    </a>
</div>
