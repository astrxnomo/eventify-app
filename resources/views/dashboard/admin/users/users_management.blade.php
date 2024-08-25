@extends('layouts.app')

@section('content')
<section class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Administración de Usuarios</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary text-white fw-medium">
            <i class="bi bi-plus-circle me-2"></i>Crear usuario
        </a>
    </div>
    <hr class="my-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Eventos</th>
                    <th>Tickets</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->label }}</td>
                    <td>{{ $user->events->count() }}</td>
                    <td>{{ $user->tickets->count() }}</td>
                    <td class="d-flex">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success te btn-sm me-2">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
