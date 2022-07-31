<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Empleado;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
       
        return view('empleado.index' , compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $especialidades = Especialidad::all();
        return view('empleado.create', compact('id', 'especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);
        //limpiar errores
        $errors = [];
        //Validación todavía hay que hacer que funcione telefono min y max
        $validado = $request->validate([
            // id	user_id	especialidad_id	fecha_incorporacion	calle	nombre	
            // numero	letra	cp	localidad
            
            'especialidad_id' => 'required|in:1,2',
            'fecha_incorporacion'=>'required|date',
            'calle' => 'required|in:calle,plaza,avenida',
            'nombre' => 'required|string|max:255',
            'numero' => 'required|digits_between:1,3',
            'letra' => 'nullable|alpha|max:1',
            'piso' => 'required|digits_between:1,2',
            'cp' => 'required|digits_between:5,5',
            'localidad'=>'required|string|max:80'

        ]);

        if ($validado) {
            $empleado = new Empleado();
            $empleado->user_id = $request->user_id;
            $empleado->especialidad_id = $request->especialidad_id;
            $empleado->fecha_incorporacion = $request->fecha_incorporacion;
            $empleado->calle = $request->calle;
            $empleado->nombre = $request->nombre;
            $empleado->numero = $request->numero;
            $empleado->piso = $request->piso;
            $empleado->letra = $request->letra;
            $empleado->cp =$request->cp;
            $empleado->localidad = $request->localidad;
            $empleado->save();
            session(['aviso' => 'Los datos de empleado fueron creados.']);
            return redirect()->action([EmpleadoController::class, 'index']);
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
        $empleado = User::findOrFail($id);
        return view('empleado.show',compact('empleado'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidades = Especialidad::all();
        $empleado = Empleado::findOrFail($id);
        return view('empleado.update', compact('empleado' , 'especialidades'));
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
         //dd($request);
        //limpiar errores
        $errors = [];
        //Validación todavía hay que hacer que funcione telefono min y max
        $validado = $request->validate([
            // id	user_id	especialidad_id	fecha_incorporacion	calle	nombre	
            // numero	letra	cp	localidad
            
            'especialidad_id' => 'required|in:1,2',
            'fecha_incorporacion'=>'required|date',
            'calle' => 'required|in:calle,plaza,avenida',
            'nombre' => 'required|string|max:255',
            'numero' => 'required|digits_between:1,3',
            'piso' =>'required|digits_between:1,2',
            'letra' => 'alpha|max:1',
            'cp' => 'required|digits_between:5,5',
            'localidad'=>'required|string|max:80'

        ]);

        if ($validado) {
            $empleado = Empleado::findOrFail($id);;
            $empleado->user_id = $request->user_id;
            $empleado->especialidad_id = $request->especialidad_id;
            $empleado->fecha_incorporacion = $request->fecha_incorporacion;
            $empleado->calle = $request->calle;
            $empleado->nombre = $request->nombre;
            $empleado->numero = $request->numero;
            $empleado->piso = $request->piso;
            $empleado->letra = $request->letra;
            $empleado->cp =$request->cp;
            $empleado->localidad = $request->localidad;
            $empleado->save();
            session(['aviso' => 'Los datos de empleado fueron actualizados.']);
            return redirect()->action([EmpleadoController::class, 'index']);
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado= Empleado::findOrFail($id);
        /* 
            eliminando datos de empleado 
        */
        $empleado->delete();
        session(['aviso' => 'Los datos del empleado han sido eliminados.']);
        return redirect()->action([EmpleadoController::class, 'index']);
    }
}