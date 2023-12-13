<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PeliculaController extends Controller
{
    public function index(){
        $id=auth()->user()->id;
        $peliculas = Pelicula::all();
        return view('peliculas.peliculas',compact('peliculas'));
    }
    public function subirPelicula(Request $request) 
    { if($request->hasFile('pelicula'))
         #$id = auth()->user()->id;
        $image = $request->file('pelicula');
        $fileName = time().".".$image->getClientOriginalExtension();
        Storage::disk('local')->put('/'.$fileName,file_get_contents($image));
        $pelicula = New Pelicula;
        $pelicula->titulo = request('titulo');
        $pelicula->ruta = $fileName;
        $pelicula->genero = request('genero');
        $pelicula->duracion = request('duracion');
        $pelicula->restriccion = request('restriccion');
        $pelicula->sinopsis = request('sinopsis');
        
        $pelicula->save();

        return redirect('peliculas');
    }
    public function mostrarPelicula(string $ruta){
        $file = Storage::disk('local')->get($ruta);
        return image::make($file)->response();  
    }
    public function pagina(int $id){
        $pelicula = Pelicula::find($id);
        return view('peliculas.pelicula',compact('pelicula'));
    }
}
