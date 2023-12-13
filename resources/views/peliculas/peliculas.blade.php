@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <form action="{{ route('subirPelicula') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <h5>Subir Pelicula</h5>
            <label>Título</label>
            <input class="form-control" type="text" name="titulo" placeholder="Título de la Película">
            <label>Género</label>
            <input class="form-control" type="text" name="genero" placeholder="Género de la Película">
            <label>Duración</label>
            <input class="form-control" type="number" name="duracion" placeholder="Duración de la Pelicula">
            <label>Restricción</label>
            <input class="form-control" type="text" name="restriccion" placeholder="Restricción de la Película">
            <label>Sinopsis</label>
            <input class="form-control" type="text" name="sinopsis" placeholder="Sinopsis de la Película">
            <input class="form-control" type="file" name="pelicula"> 
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
        <div class="row row-cols-3 mt-5">
        @foreach($peliculas as $pelicula)
        <div class="col">
            <div class="card">
                <img height="200" src="/pelicula/{{$pelicula->ruta}}">
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
    </div>

    @endsection