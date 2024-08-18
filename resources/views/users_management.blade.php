@extends('layouts.app')

<title>Usuarios</title>

@section('content')

<section class="container mb-5">


    <div class="container text-center">
        <a href="{{ route('users.create') }}">
            <button class="btn btn-success btn-block">
                Crear
            </button>
        </a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->role->label}}</td>                      
                    <td>

                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">
                            <i class="bi bi-pencil-fill"></i>
                        </a>

<!--                         <form action="{{route('users.edit',$user->id)}}"  method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form> -->

                        <form action="{{ route('users.destroy',$user->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
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