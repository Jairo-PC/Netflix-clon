@extends('layouts.app')

@section('contenido')
    <form action="{{ route('pelicula.update', $pelicula) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre de la pelicula</label>
            <input type="text" class="form-control" name="nombre"
                placeholder="Ingrese el nombre de la pelicula" value="{{$pelicula->nombre}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Portada de la pelicula</label>
            <input type="text" class="form-control" name="imagen" value="{{$pelicula->imagen}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion de la pelicula</label>

            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control"  >{{$pelicula->descripcion}}</textarea>
            @error('descripcion')
                <small style="...">{{ $message }}</small>
            @enderror
            <script>
                CKEDITOR.replace('descripcion');
            </script>
        </div>
        <div class="mb-3">
            <label class="form-label">Trailer</label>
            <input type="text" class="form-control" name="trailer" placeholder="Ingrese el trailer de su pelicula" value="{{$pelicula->trailer}}">
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('pelicula.index') }}" class="btn btn-secondary">Cancelar</a>
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>
        </div>
    </form>
@endsection
