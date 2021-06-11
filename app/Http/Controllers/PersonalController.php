<?php

namespace App\Http\Controllers;

use App\Models\Administradore;
use App\Models\Cliente;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $comprobar = Personal::find($request->user);
        
        //return $comprobar;
        if(Hash::check($request->pwd, $comprobar->password)){
            if ($comprobar->personal === 'Doctor'){
            return view('personal.initdoctor');
            }
            else {
                return view('personal.initpersonal');
            }
        }
        else {
            return back()->withInput();
        }
    }

    public function index(){

        $nombre = Administradore::all();

        return view('administrador.formdoctore', compact('nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = Cliente::all();

        return view('personal.consultar', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
 
        $personal = new Personal();

        $personal->id_personal = $request->idperson;
        $personal->nombre = $request->nombre;
        $personal->apellido1 = $request->apellido1;
        $personal->apellido2 = $request->apellido2;
        $personal->telefono = $request->telefono;
        $personal->correo = $request->correo;
        $personal->direccion = $request->direccion;
        $personal->personal = $request->tipo;
        $personal->ciudad = $request->ciudad;
        $personal->id_doctor = $request->iddoctor;
        $personal->Password = Hash::make($request->pwd);
        $personal->id_admin = $request->idadmin;

        //return $personal

        $personal->save();

        return view('administrador.comprobacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datos = Personal::all();

        return view('personal.show', compact('datos'));
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
    public function update(Request $request)
    {
        $datos = Personal::find($request->idperson);

        $datos->id_personal = $request->idperson;
        $datos->nombre = $request->nombre;
        $datos->apellido1 = $request->apellido1;
        $datos->apellido2 = $request->apellido2;
        $datos->telefono = $request->telefono;
        $datos->correo = $request->correo;
        $datos->direccion = $request->direccion;
        $datos->personal = $request->tipo;
        $datos->ciudad = $request->ciudad;
        $datos->id_doctor = $request->iddoctor;
        $datos->Password = Hash::make($request->pwd);
        $datos->id_admin = $request->idadmin;

        //return $datos;
        
        $datos->save();
        
        return view('administrador.resolucion');
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
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return view('personal.doctores');
    }
}
