<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Personal;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre = Personal::all();

         return view('administrador.formularioCli', compact('nombre'));
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
       // return $request;

    
        $cliente = new Cliente();

        $cliente->num_expe = $request->expediente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido1 = $request->apellido1;
        $cliente->apellido2 = $request->apellido2;
        $cliente->telefono = $request->telefono;
        $cliente->DNI = $request->dni;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->id_personal = $request->doctor; 

        //return $cliente;

        $cliente->save();

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
    public function update(Request $request)
    {
        $tablas = Cliente::find($request->expediente);


        $tablas->num_expe = $request->expediente;
        $tablas->nombre = $request->nombre;
        $tablas->apellido1 = $request->apellido1;
        $tablas->apellido2 = $request->apellido2;
        $tablas->telefono = $request->telefono;
        $tablas->DNI = $request->dni;
        $tablas->direccion = $request->direccion;
        $tablas->ciudad = $request->ciudad;
        $tablas->id_personal = $request->doctor; 
        
        //return $tablas;
        $tablas->save();

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
}
