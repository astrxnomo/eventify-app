@extends('layouts.app')

<title>Editar Estados</title>

@section('content')

<section class="container mb-5">

    <div class="container text-center">
        <form id="StatusForm" action="{{route('status.update',$statu->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del estado:
                    <input value="{{$statu->name}}" type="text" id="name" name="name" class="form-control" required>
                </label>
            </div>

                <input type="submit" class="btn btn-success btn-block" name="save" value="Editar">
        </form>
        <div id="errorMessages"></div>
    </div>

</section>

<script src="{{ asset('js/statuFormValidation.js') }}"></script>

@endsection