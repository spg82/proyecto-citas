<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
       // $user = User::find($id);
       // $usuario = User::find($id)->perfil;
        $usuario = User::find($id);


        return view('perfil.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
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
        // dd($request);
        //limpiar errores
        $errors = [];
        //Validación todavía hay que hacer que funcione telefono min y max
        $validado = $request->validate([
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'required|string|max:255',
            'telefono' => 'required|digits_between:9,9|unique:App\Models\Perfil,telefono',
            'imagen' => 'mimes:jpg,png,jpeg'
        ]);

        if ($validado) {
            $id = $request->user_id;
            $user = User::find($id);
            $perfil = new Perfil();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = Str::slug($user->name . $id) . "." . $imagen->guessExtension();
                $ruta = public_path('img/user/');
                $imagen->move($ruta, $nombreImagen);
                $perfil->imagen = $nombreImagen;
            } else {
                $perfil->imagen = "";
            }

            $perfil->apellido1 = $request->apellido1;
            $perfil->apellido2 = $request->apellido2;
            $perfil->telefono = $request->telefono;
            $perfil->user_id = $request->user_id;
            $user->perfil()->save($perfil);
            session(['aviso' => 'El perfil fue creado.']);
            return redirect()->action([PerfilController::class, 'index']);
        } else {
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('perfil.update', compact('user'));
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
            'telefono' => 'required|digits_between:9,9',
            'imagen' => 'mimes:jpg,png'
        ]);
        if ($validado) {
            
            $user = User::find($id);
            $perfil =  Perfil::findOrFail($user->perfil->id);
            $perfil->apellido1 = $request->apellido1;
            $perfil->apellido2 = $request->apellido2;
            $perfil->telefono = $request->telefono;
            $perfil->user_id = $user->id;
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = Str::slug($user->name . $user->id) . "." . $imagen->guessExtension();
                $ruta = public_path('img/user/');
                $imagen->move($ruta, $nombreImagen);
                $perfil->imagen = $nombreImagen;
            } else {
                if ($request->imagen_old === "") {
                    $perfil->imagen = $request->imagen_old;
                }
            }
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
        $user= User::find($id);
        $perfil = Perfil::findOrFail($user->perfil->id);
        /*
            eliminando imagen de la carpeta, si existe
         */
        $image_path = public_path('img/user/') . $perfil->imagen;
        if (@getimagesize($image_path)) {
            unlink($image_path);
        }
        /* 
            eliminando perfil 
        */
        $perfil->delete();
        session(['aviso' => 'El perfil fue eliminado.']);
        return redirect()->action([PerfilController::class, 'index']);
    }
}
