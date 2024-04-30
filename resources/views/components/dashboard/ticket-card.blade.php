<div class="col-md-6 col-lg-3 mb-4">
    <a href="{{ $url }}" class="text-decoration-none text-dark card-hover">
        <div class="card">
            <div class="card-body">
                <div class="buy d-flex justify-content-between align-items-center">
                    <h4 class="card-title fw-bold title-truncate">{{ $title }}</h4>
                </div>

                <div class="row">
                    <div class="col mb-2">
                        @foreach($badges as $badge)
                            <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">{{ $badge }}</span>
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

                <hr class="mt-1">

                <div class="buy d-flex justify-content-between align-items-center mt-3">
                    <h4 class="card-title fw-bold">
                        Datos de compra
                    </h4>
                </div>

                <div class="row">
                    <div class="col mb-2">
                        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill mb-2">
                            <i class="bi bi-person-square me-1"></i>
                            {{ auth()->user()->name }}
                        </span>
                        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill mb-2">
                            <i class="bi bi-calendar2-event-fill me-1"></i>
                            {{ $purchaseDate }}
                        </span>
                        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill mb-2">
                            <i class="bi bi-ticket-fill me-1"></i>
                            x{{ $ticketCount }} Ticket
                        </span>
                    </div>
                </div>

                <div class="buy d-flex justify-content-between align-items-center">
                    <h4 class="text-dark fw-semibold">
                        {{ $price }}
                    </h4>
                    <h5 class="mb-0">
                        <span class="badge {{ $status ? 'text-bg-success' : 'text-bg-danger' }} badge-hover mb-2">{{ $status ? 'Vigente' : 'No Vigente' }}</span>
                    </h5>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <img src="{{ $qrCodeUrl }}" alt="QR Code">
                </div>

                <hr>
                <div class="buy d-flex flex-row justify-content-between align-items-center gap-2">
                    <button class="btn btn-success fw-bold col">
                        <i class="bi bi-download me-2"></i>
                        Descargar
                    </button>
                </div>
            </div>
        </div>
    </a>
</div>
