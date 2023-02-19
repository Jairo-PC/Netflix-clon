@extends('layouts.app')

@section('contenido')

    <form action="{{route('pelicula.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre de la pelicula</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre de la pelicula">
        </div>
        <div class="mb-3">
            <label class="form-label">Portada de la pelicula</label>
            <input type="text" class="form-control" name="imagen">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion de la pelicula</label>

            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control" ></textarea>
            @error('descripcion')
            <small style="...">{{$message}}</small>
            @enderror
            <script>
                CKEDITOR.replace('descripcion');
            </script>
        </div>
        <div class="mb-3">
            <label class="form-label">Trailer</label>
            <input type="text" class="form-control" name="trailer" placeholder="Ingrese el trailer de su pelicula">
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="" class="btn btn-secondary">Cancelar</a>
                <input type="submit" class="btn btn-primary" value="Registrar">
            </div>
        </div>
    </form>

    {{-- <form action="{{url('/peliculas')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-nmd-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}" required>
                            @error('nombre')
                                <small style="...">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Portada de la pelicula</label>
                            <input type="file" name="imagen" id="file" class="form-control" value="{{old('imagen')}}" required>
                            @error('imagen')
                                <small style="...">{{$message}}</small>
                            @enderror
                            <br>
                            <center><output id="list" </output></center>
                            <script>
                                function archivo (evt){
                                    var files = evt.target.files;
                                    for(var i = 0, f; f = files[i]; i++){
                                        if(!f.type.match('image.*')){
                                            continue;
                                        }
                                        var reader = new FileReader();
                                        reader.onload = (function (theFile)) {
                                            return function (e){
                                                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src>']
                                            };
                                        }}(f);
                                        reader.readAsDataURL(f);
                                    }

                                document.getElementById('file').addEventListener('change', archivo, false);
                            </script>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Descripcion de la pelicula</label>
                            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control" required>{{old('descripcion')}}</textarea>
                            @error('descripcion')
                                <small style="...">{{$message}}</small>
                            @enderror
                            <script>
                                CKEDITOR.replace('descripcion');
                            </script>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Trailer </label>
                            <input type="text" name="trailer" class="form-control" value="{{old('trailer')}}" required>
                            @error('trailer')
                                <small style="...">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="btn btn-secondary">Cancelar</a>
                    <input type="submit" class="btn btn-primary" value="Registrar">
                </div>
            </div>
        </div>
    </form> --}}
@endsection
