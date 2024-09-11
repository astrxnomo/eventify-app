@extends('layouts.app')

@section('content')
<section class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Administración de Estados</h1>
        <a href="{{ route('status.create') }}" class="btn btn-primary text-white fw-medium">
            <i class="bi bi-plus-circle me-2"></i>Crear estado
        </a>
    </div>
    <hr class="my-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre del estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($status as $statu)
                <tr>
                    <td>{{ $statu->id }}</td>
                    <td>{{ $statu->name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('status.edit', $statu->id) }}" class="btn btn-success te btn-sm me-2">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('status.destroy', $statu->id) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este estado?');">
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
