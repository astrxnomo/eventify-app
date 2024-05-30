@extends('layouts.app')

<title>Dashboard | Eventos</title>

@section('content')

@include('components.dashboard.nav')
<section class="container mb-5">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="fw-bold">
                Editar Evento
            </h1>
            <hr class="mt-0">


        </div>
        <div>
            <form action="{{ route('events.update',$event) }}" method="POST">
                @csrf @method('PATCH')
                <label for="statu">Estado del evento</label>
                <select name="statu_id" id="statu" >
                    @foreach ($status as $statu)
                        <option value="{{$statu['id']}}">{{$statu['name']}}</option>
                    @endforeach
                </select></br>
                <label for="location">Localizacion</label>
                <select name="location_id" id="location" >
                    @foreach ($locations as $location)
                        <option value="{{$location['id']}}">{{$location['address']}}, | {{$location['city']}}</option>
                    @endforeach
                </select></br>
                <label for="category">Categoria</label>
                <select name="category_id" id="category" >
                    @foreach ($categories as $category)
                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                    @endforeach
                </select></br>
                <label for="name">Nombre del evento</label>
                <input type="text" id="name" name="name" value="{{old('name',$event->name)}}" required ></br>
                <label for="descri">Descripcion</label>
                <input type="textarea" id="descr" name="descri" value="{{old('descri',$event->description)}}"></br>
                <label for="url">img_url</label>
                <input type="url" id="url" name="url" value="{{old('url',$event->img_url)}}"></br>
                <label for="capacity">Capacidad</label>
                <input type="number" id="capacity" name="capacity" value="{{old('capacity',$event->capacity)}}"></br>
                <label for="price">Precio</label>
                <input type="number" id="price" name="price" value="{{old('price',$event->price)}}"></br>
                <label for="inicio">Fecha de inicio</label>
                <input type="date" id="inicio" name="inicio" value="{{old('inicio',$event->start_date)}}"></br>
                <label for="fin">Fecha de finalizacion</label>
                <input type="date" id="fin" name="fin" value="{{$event['end_date']}}"></br>
                <input type="submit" value="Enviar">
            </form>
            <a href="{{route('dashboard.events')}}">Regresar</a>
        </div>
    </div>


</section>

@endsection
