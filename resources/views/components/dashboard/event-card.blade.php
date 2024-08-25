<div class="col-md-6 col-lg-3 mb-4">
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="card-title fw-bold truncate fs-4">
                    {{ $title }}
                </h2>
            </div>

            <div class="row">
                <div class="col truncate">
                    <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2 ">
                        {{ $category }}
                    </span>
                </div>
            </div>


            <img class="card-img img-fluid" src="{{ asset('storage/' . $event->img_url) }}" alt="Imagen del evento">


            <div class="d-flex justify-content-between mt-3">
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ \Illuminate\Support\Str::limit($location, 15) }}
                    </span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                        <i class="bi bi-calendar2-event-fill me-1"></i>
                        {{ $date }}
                    </span>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center mt-1">
                <a href="{{route('event.show', $event->id)}}" class="w-100">
                    <button class="btn btn-light fw-bold col w-100">
                        <i class="bi bi-box-arrow-up-right me-2"></i>
                        Ver evento
                    </button>
                </a>
            </div>

            <hr>

            <div class="d-flex justify-content-between align-items-center">
                <h4 class="text-dark fw-semibold">
                    ${{ number_format($price) }}
                </h4>
                <h5>
                    @if ($status == 1)
                        <span class="badge text-bg-success badge-hover">
                            Disponible
                        </span>
                    @elseif ($status == 2)
                        <span class="badge text-bg-danger badge-hover">
                            Agotado
                        </span>
                    @else
                        <span class="badge text-bg-dark badge-hover">
                            Finalizado
                        </span>
                    @endif

                </h5>
            </div>

            <hr class="mt-2">
            <div class="d-flex">
                <!-- Botón de edición -->
                <div class="col me-1">
                    <a href="{{ route('event.edit', $event->id) }}">
                        <button type="submit" class="btn btn-success fw-bold w-100 h-100">
                            <i class="bi bi-pencil-square me-1"></i>
                            Editar
                        </button>
                    </a>
                </div>

                <!-- Formulario de eliminación -->
                <div class="col ms-1">
                    <form method="POST" action="{{ route('event.destroy', $event->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger fw-bold w-100 h-100">
                            <i class="bi bi-trash3 me-1"></i>
                            Borrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
