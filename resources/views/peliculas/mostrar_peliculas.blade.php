@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-3 mt-5 container">
        @foreach($peliculas as $pelicula)
        <div class="col">
            <div class="card">
                <a href="/peliculas/{{$pelicula->id}}" class="card">
                    <img height="200" src="/pelicula/{{$pelicula->ruta}}">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center"><strong>{{$pelicula->titulo}}</strong></h5>
                    <small class="card-text">Género: {{$pelicula->genero}}</small>
                    <small class="card-text">Sinopsis: {{$pelicula->sinopsis}}</small>
                    <small class="card-text">Duración: {{$pelicula->duracion}}</small>
                    <small class="card-text">Restricción: {{$pelicula->restriccion}}</small>
                    <div>
                        <small class="text-muted">{{$pelicula->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection