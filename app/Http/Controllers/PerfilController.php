<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//use App\Models\Perfil;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Vista del perfil
         */

        $id = Auth::user()->id;
        $user = User::find($id);
        $usuario = User::find($id)->perfil;



        return view('perfil.index', compact('usuario' , 'user','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view('perfil.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print $request->file('imagen');
        //limpiar errores
        $errors = [];
        //Validación todavía hay que hacer que funcione telefono min y max
        $validado = $request->validate([
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'required|string|max:255',
            'telefono' => 'required|integer|min:8',
            'imagen' => 'required|mimes:jpg,png,jpeg'
        ]);
        if ($validado) {
        
        if ($request->hasFile('imagen')) {
            $destinationPath = 'public/img/user/';
            $fileName = Auth::user()->name.'.'.$request->file('imagen')->getMimeType();
            // Mover o ficheiro cun novo nome:
            $request->file('imagen')->move($destinationPath, $fileName);
        }
            $perfil = new Perfil();
            $perfil->apellido1 = $request->apellido1;
            $perfil->apellido2 = $request->apellido2;
            $perfil->telefono = $request->telefono;
            $perfil->imagen = Auth::user()->name.'.'.$request->file('imagen')->getMimeType();
            $perfil->user_id = $request->user_id;
            $perfil->save();
            return redirect()->action([PerfilController::class, 'index']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Auth::user()->id;
        $usuario = User::find($id)->perfil;
        return view('perfil.update', compact('usuario', 'id'));
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
        //limpiar errores
        $errors = [];
        //Validación
        $validado = $request->validate([
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'required|string|max:255',
            'telefono' => 'required|min:9|max:9|integer',
            'imagen' => 'required|mimes:jpg,png'
        ]);
        if ($validado) {
            $perfil = new Perfil();
            $perfil->apellido1 = $request->apellido1;
            $perfil->apellido2 = $request->apellido2;
            $perfil->telefono = $request->telefono;
            $perfil->imagen = $request->imagen;
            $perfil->save();
            session(['aviso' => 'El perfil fue actualizado.']);
            return redirect()->action([PerfilController::class, 'index']);
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
        $perfil = Perfil::findOrFail($id);
        $perfil->delete();
        session(['aviso' => 'El perfil fue eliminado.']);
        return redirect()->action([PerfilController::class, 'index']);
    }
}
