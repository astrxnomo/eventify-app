@extends('layouts.app')

<title>Crear Usuarios</title>

@section('content')

<section class="container mb-5">

    <div class="container text-center">
        <form id="userForm" action="{{route('users.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:
                    <input type="text" id="nom" name="name" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:
                    <input type="email" id="email" name="email" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:
                    <input type="password" id="password" name="password" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rol:
                    <select id="role" name="role_id" class="form-control" require>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->label }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
        </form>
        <div id="errorMessages"></div>
    </div>

</section>

<script src="{{ asset('js/userFormValidation.js') }}"></script>

@endsection
