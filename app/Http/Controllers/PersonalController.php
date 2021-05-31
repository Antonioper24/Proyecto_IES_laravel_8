<?php

namespace App\Http\Controllers;

use App\Models\Administradore;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('personal.initdoctor');
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
        //
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
