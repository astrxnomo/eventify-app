@extends('layouts.app')

<title>Editar Categorias</title>

@section('content')

<section class="container mb-5">

    <div class="container text-center">
        <form id="CategoryForm" action="{{route('categories.update',$category->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la categoria:
                    <input value="{{$category->name}}" type="text" id="name" name="name" class="form-control" required>
                </label>
            </div>

                <input type="submit" class="btn btn-success btn-block" name="save" value="Editar">
        </form>
        <div id="errorMessages"></div>
    </div>

</section>

<script src="{{ asset('js/categoryFormValidation.js') }}"></script>

@endsection