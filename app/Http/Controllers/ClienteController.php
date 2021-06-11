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
        $nombre = Personal::all()->where('personal', '=','Doctor');

         return view('administrador.formularioCli', compact('nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datos = Cliente::find($request->expediente);

        if ($datos === null){
            return view('cliente.resolucion');

        }
   
        $data = Cliente::find($request->expediente);

         if ($data->ciudad === $request->ciudad) { 
             
                $busca = DB::table('citas')->where('num_expe', '=', $data->num_expe)->first();

                return view('cliente.vista', ['nombre' => $data, 'cita' => $busca]);

        }
        else {
            return view('cliente.resolucion');
        }

        //return $datos;
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
        $cliente->num_radiogra = $request->radio;
        $cliente->tratamiento = $request->tratami;
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
    public function show()
    {
        $data = Cliente::all();

        return view('administrador.clientes', compact('data'));
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
        $tablas->num_radiogra = $request->radio;
        $tablas->tratamiento = $request->tratami;
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
