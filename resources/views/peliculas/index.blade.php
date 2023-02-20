@extends('layouts.app')
<br>
@section('titulo', 'Lista de peliculas')

@section('contenido')
    <br>
    <a class="btn btn-primary" href="{{route('pelicula.create')}}" role="button">Crear nuevo registro</a>
    <br>
    <br>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Trailer</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as $pelicula)
                <tr>
                    <th scope="row">{{ $pelicula->id }}</th>
                    <th>{{ $pelicula->nombre }}</th>
                    <td>{{ $pelicula->imagen }}</td>
                    <td>{!! $pelicula->descripcion !!}</td>
                    <td>{{ $pelicula->trailer }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-primary btn-sm" href="#" role="button">Mostar</a>
                            <a class="btn btn-success btn-sm" href="{{ route('pelicula.edit', $pelicula->id) }}"
                                role="button">Editar</a>
                            {{-- <a class="btn btn-danger" href="{{route('pelicula.destroy',$pelicula->id)}}" role="button">Eliminar</a> --}}
                            <form action="{{ route('pelicula.destroy', $pelicula->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Estas seguro de eliminar el registro?')"
                                    class="btn btn-danger btn-sm" value="Borrar">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
