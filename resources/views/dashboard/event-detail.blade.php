@extends('layouts.app')

<title>Dashboard | Eventos</title>

@section('content')

@include('components.dashboard.nav')

<section class="container mb-5">
    <div class="row mt-4">
        <div class="col-12">
            <h1 class="fw-bold">
                {{$event->name}}
            </h1>
            <hr class="mt-0">

            <div class="row">
                <p>{{$event->description}}</p>
                <a href="{{route('explore')}}">Regresar</a>
            </div>
        </div>
    </div>
    
    
</section>

@endsection

