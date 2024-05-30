@extends('layouts.app')

<title>Dashboard | Crear evento</title>

@section('content')

@include('components.dashboard.nav')

<section class="container mb-5">
    <div class="row mt-4">

        <div class="col-12">
            <h1 class="fw-bold">
                Crear evento
            </h1>
            <hr class="mt-0">


            <div class="row">
                <div class="col-12 col-md-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.event.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="eventName" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="eventName" name="eventName" required autofocus>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="eventDescription" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Descripcion') }}</label>

                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control" id="eventDescription" name="eventDescription" required></textarea>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label for="eventCategories" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Categoria') }}</label>

                                    <div class="col-md-6">
                                        {{-- @foreach($categories as $category)
                                            <input type="checkbox" class="btn-check" id="category{{ $category->id }}" name="eventCategories[]" value="{{ $category->id }}" {{ in_array($category->id, $event->categories->pluck('id')->toArray()) ? 'checked' : '' }} autocomplete="off">
                                            <label for="category{{ $category->id }}" class="btn btn-sm mb-2">{{ $category->name }}</label>
                                        @endforeach --}}

                                        <br>
                                        <span id="categoryError" class="d-none text-danger" role="alert">
                                            <strong><i class="bi bi-exclamation-circle"></i> Solo puedes seleccionar un máximo de 3 categorías.</strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="location" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Ubicación') }}</label>

                                    <div class="col-md-6">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="eventCountry" class="form-label fs-6 mb-0">{{ __('País') }}</label>
                                                <input type="text" class="form-control" id="eventCountry" name="eventCountry"  required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="eventRegion" class="form-label fs-6 mb-0">{{ __('Región') }}</label>
                                                <input type="text" class="form-control" id="eventRegion" name="eventRegion" required>
                                            </div>

                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="eventCity" class="form-label fs-6 mb-0">{{ __('Ciudad') }}</label>
                                                <input type="text" class="form-control" id="eventCity" name="eventCity" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="eventAddress" class="form-label fs-6 mb-0">{{ __('Dirección') }}</label>
                                                <input type="text" class="form-control" id="eventAddress" name="eventAddress" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="eventImage" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Imagen') }}</label>

                                    <div class="col-md-3">
                                        <input type="file" class="form-control" id="eventImage" name="eventImage">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="eventDate" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Fecha') }}</label>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-calendar2-event-fill"></i></span>
                                            <input type="date" class="form-control" id="eventDate" name="eventDate" value="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="eventCapacity" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Capacidad') }}</label>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                                            <input type="number" class="form-control" id="eventCapacity" name="eventCapacity" value="{{ $event->capacity }}" step="1" min="0" max="99999999999" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="eventPrice" class="col-md-4 col-form-label text-md-end fw-semibold">{{ __('Precio') }}</label>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                                            <input type="number" class="form-control" id="eventPrice" name="eventPrice" value="1" step="1" min="0" max="10000000" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 mt-4">
                                    <div class="col-md-6 offset-md-4">
                                        <a href="{{ route('dashboard.events.index') }}" class="btn btn-secondary me-2">
                                            <i class="bi bi-x-lg"></i>
                                            Cancelar
                                        </a>
                                        <button type="submit" class="btn btn-primary text-white">
                                            <i class="bi bi-floppy"></i>
                                            {{ __('Guardar cambios') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center ">
                                <h4 id="eventNamePreview" class="card-title fw-bold title-truncate">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col badge-container">

                                </div>
                            </div>
                            <img class="card-img img-fluid" src="{{ asset('storage/' . '1.png') }}" alt="Imagen del evento">
                            <div class="d-flex justify-content-between mt-3">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                                        <i class="bi bi-geo-alt-fill mt-1"></i>
                                        <span id="eventLocationPreview">Lorem ipsum dolor</span>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill mb-2">
                                        <i class="bi bi-calendar2-event-fill me-1"></i>
                                        <span id="eventDatePreview">08 May 2024</span>
                                    </span>
                                </div>
                            </div>
                            <p id="eventDescriptionPreview" class="card-text description-truncate">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat diam eget facilisis fringilla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ornare sollicitudin tincidunt. Nulla ut feugiat tellus, quis congue sapien. Suspendisse potenti. Pellentesque non euismod arcu.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 id="eventPricePreview" class="text-dark fw-semibold">
                                    $45,000
                                </h4>
                                <h5 class="mb-0">
                                    <span class="badge text-bg-success badge-hover mb-2">
                                        Disponible
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
