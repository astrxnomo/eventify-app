<div class="col-md-6 col-lg-3 mb-4">
    <a href="{{ route('event.show', $event->id) }}" class="text-decoration-none text-dark card-hover">
        <div class="card">
            <div class="card-body">

                @if(auth()->check() && $event->user_id == auth()->id())
                    <span class="position-absolute top-0 start-50 translate-middle badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis">
                        <i class="bi bi-calendar-check-fill me-1"></i>
                        Tu evento
                    </span>
                @endif

                <div class="d-flex justify-content-between align-items-center ">
                    <h2 class="card-title fw-bold truncate fs-4">
                        {{ $title }}
                    </h2>
                </div>

                <div class="row">
                    <div class="col truncate">
                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                            {{ $category }}
                        </span>
                    </div>
                </div>

                <img class="card-img img-fluid" src="{{ asset('storage/' . $image) }}" alt="Imagen del evento">

                <div class="d-flex justify-content-between mt-3">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                            <i class="bi bi-geo-alt-fill"></i>
                            {{\Illuminate\Support\Str::limit($location, 15) }}
                        </span>
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                            <i class="bi bi-calendar2-event-fill me-1"></i>
                            {{ $date }}
                        </span>
                    </div>
                </div>


                <p class="card-text description-truncate">
                    {{ $description }}
                </p>

                <div class="buy d-flex justify-content-between align-items-center">
                    <h4 class="text-dark fw-semibold">
                        ${{ number_format($price) }}
                    </h4>
                    <h5 class="mb-2">
                        @if ($status == 1)
                            <span class="badge text-bg-success badge-hover">
                                Disponible
                            </span>
                        @elseif ($status == 2)
                            <span class="badge text-bg-danger badge-hover">
                                Agotado
                            </span>
                        @elseif ($status == 3)
                            <span class="badge text-bg-dark badge-hover">
                                Finalizado
                            </span>
                        @endif

                    </h5>
                </div>

            </div>
        </div>
    </a>
</div>
