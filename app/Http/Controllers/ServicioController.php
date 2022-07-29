<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Servicio;
use Illuminate\Http\Request; 
use Illuminate\Support\Str;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        
      
        return view('servicios.index' , compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidad::all();
        return view('servicios.create', compact('especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        //limpiar errores
        $errors = [];
        //Validación todavía hay que hacer que funcione telefono min y max
        $validado = $request->validate([
           // id`, `especialidad_id`, `nombre`, `descripcion`, `duracion`, `precio`, `imagen`
            'especialidad_id' => 'required',
            'nombre' => 'required|string|max:255',
            'duracion' => 'required|digits_between:2,2',
            'precio' => 'required',
            'imagen' => 'required|mimes:jpg,png,jpeg'
        ]);

        if ($validado) {
            $servicio = new Servicio();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = Str::slug($request->nombre) . "." . $request->imagen->guessExtension();
                $ruta = public_path('img/servicios/');
                $imagen->move($ruta, $nombreImagen);
                $servicio->imagen = $nombreImagen;
            } 

            $servicio->especialidad_id = $request->especialidad_id;
            $servicio->nombre = $request->nombre;
            $servicio->duracion = $request->duracion;
            $servicio->precio = $request->precio;
            $servicio->save();
            session(['aviso' => 'El servicio fue creado.']);
            return redirect()->action([ServicioController::class, 'index']);
        } else {
            return back()->withInput();
        }
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $servicio = Servicio::find($id);
        return view('servicios.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('servicios.update', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio= Servicio::findOrFail($id);
        
        /*
            eliminando imagen de la carpeta, si existe
         */
        $image_path = public_path('img/servicios/') . $servicio->imagen;
        if (@getimagesize($image_path)) {
            unlink($image_path);
        }
        /* 
            eliminando perfil 
        */
        $servicio->delete();
        session(['aviso' => 'El servicio fue eliminado.']);
        return redirect()->action([ServicioController::class, 'index']);
    }
}
