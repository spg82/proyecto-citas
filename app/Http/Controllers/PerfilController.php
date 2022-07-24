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
        $usuario = User::find($id)->perfil;
       

       
       return view('perfil.index',compact('usuario'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('perfil.create');
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
        //Validación
        $validado = $request->validate([
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'required|string|max:255',
            'telefono'=> 'required|min:9|max:9|integer',
            'imagen'=> 'required|mimes:jpg,png'
        ]);
        if ($validado) {
            $perfil = new Perfil();
            $perfil->apellido1 = $request->apellido1;
            $perfil->apellido2 = $request->apellido2;
            $perfil->telefono = $request->telefono;
            $perfil->imagen = $request->imagen;
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
        //
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
        //
    }
}
