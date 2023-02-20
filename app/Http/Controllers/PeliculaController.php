<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{

    public function index()
    {
        $peliculas = Pelicula::all();

        //return view('peliculas.index', ['peliculas'=>$peliculas]);
        return view('peliculas.index', compact('peliculas'));
    }


    public function create()
    {
        return view('peliculas.create');
        
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $pelicula = Pelicula::create(
            $request->all()
        );

        return back();
    }

    public function show(Pelicula $pelicula)
    {
        //
    }


    public function edit(Pelicula $pelicula)
    {
        return view('peliculas.edit', compact('pelicula'));
    }


    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula = $pelicula->update(
            $request->all()
        );

        return redirect()->route('pelicula.index');
    }


    public function destroy($id)
    {
        Pelicula::destroy($id);
        return redirect()-> route(route:'pelicula.index')-> with('mensaje','Se elimino de manera exitosa');
    }
}
