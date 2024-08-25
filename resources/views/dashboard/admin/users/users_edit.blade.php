@extends('layouts.app')

<title>Editar Usuarios</title>

@section('content')

<section class="container mb-5">

    <div class="container text-center">
        <form id="userForm" action="{{route('users.update',$user->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:
                    <input value="{{$user->name}}" type="text" id="nom" name="name" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:
                    <input value="{{ $user->email }}" type="email" id="email" name="email" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:
                    <input value="{{ $user->password }}" type="password" id="password" name="password" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rol:
                    <select id="role" name="role_id" class="form-control" require>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                            {{ $role->label }}
                        </option>
                        @endforeach
                    </select>
                </label>
            </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="Editar">
        </form>
        <div id="errorMessages"></div>
    </div>

</section>

<script src="{{ asset('js/userFormValidation.js') }}"></script>

@endsection