@extends('layouts.app')

@section('content')
<section class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Administración de Categorias</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary text-white fw-medium">
            <i class="bi bi-plus-circle me-2"></i>Crear categoria
        </a>
    </div>
    <hr class="my-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre de la categoria</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success te btn-sm me-2">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta categoria?');">
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
