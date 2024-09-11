@extends('layouts.app')

<title>Crear Categorias</title>

@section('content')

<section class="container mb-5">

    <div class="container text-center">
        <form id="CategoryForm" action="{{route('categories.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la categoria:
                    <input type="text" id="name" name="name" class="form-control" required>
                </label>
            </div>
            
            
            
                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
        </form>
        
    </div>

</section>

<script src="{{ asset('js/categoryFormValidation.js') }}"></script>

@endsection
