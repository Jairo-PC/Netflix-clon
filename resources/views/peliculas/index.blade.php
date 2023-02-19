@extends('layouts.app')

@section('contenido')

    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Trailer</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as $pelicula)
                <tr>
                    <th scope="row">{{$pelicula->id}}</th>
                    <th>{{$pelicula->nombre}}</th>
                    <td>{{$pelicula->imagen}}</td>
                    <td>{{$pelicula->descripcion}}</td>
                    <td>{{$pelicula->trailer}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection



