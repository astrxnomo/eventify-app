<div class="col-md-6 col-lg-3 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="card-title fw-bold truncate fs-4">
                    {{ $title }}
                </h2>
            </div>

            <div class="row">
                <div class="col mb-2 truncate">
                    <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2 ">
                        {{ $category }}
                    </span>
                </div>
            </div>

            <img class="card-img img-fluid" src="{{ asset('storage/' . $image) }}" alt="Imagen del evento">

            <div class="d-flex justify-content-between mt-3">
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                        <i class="bi bi-geo-alt-fill me-1"></i>
                        {{ $location }}
                    </span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                        <i class="bi bi-calendar2-event-fill me-1"></i>
                        {{ $date }}
                    </span>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center mb-1 mt-1">
                <a href="{{route('event.show', $ticket->event->id)}}" class="w-100">
                    <button class="btn btn-light fw-bold col w-100">
                        <i class="bi bi-box-arrow-up-right me-2"></i>
                        Ver evento
                    </button>
                </a>
            </div>

            <hr>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <h4 class="fw-bold">
                    Datos de compra
                </h4>
            </div>
            <div class="row mb-0">
                <div class="col-md-6">
                    <label for="total">Precio</label>
                    <h5 id="ticketPrice" class="font-weight-bold">${{number_format($price)}}</h5>
                </div>
                <div class="col-md-6">
                    <label for="quantity">Cantidad</label>
                    <h5 id="quantity" class="font-weight-bold">{{ $quantity }} <i class="bi bi-ticket-fill me-1"></i></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="total">Total</label>
                    <h4 id="total" class="font-weight-bold">${{ number_format($quantity * $price) }}</h4>
                </div>
            </div>

            <small class="text-muted">

                {{ \Carbon\Carbon::parse($purchaseDate)->format('d F Y, h:i A') }}
            </small>

            <hr class="mb-2">
            <div class="d-flex justify-content-center w-100">
                <h4 class="w-100 text-center">
                    @if ($ticket->event->status_id == 3)
                        <span class="badge text-bg-dark badge-hover">
                            <i class="bi bi-x-circle-fill me-1"></i>
                            Ticket vencido
                        </span>
                    @else
                        <span class="badge text-bg-success badge-hover">
                            <i class="bi bi-check-circle-fill me-1"></i>
                            Ticket vigente
                        </span>
                    @endif
                </h4>
            </div>

            <hr class="mt-0">

            <div class="d-flex flex-row justify-content-between align-items-center gap-2">
                <a href="{{ route('tickets.report', ['id' => $ticket->id]) }}" class="btn btn-success fw-bold col">
                    <i class="bi bi-download me-2"></i>
                    Descargar
                </a>
            </div>

        </div>
    </div>
</div>
