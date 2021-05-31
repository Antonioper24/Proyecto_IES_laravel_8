<?php

namespace App\Http\Controllers;

use App\Models\Administradore;
use App\Models\Personal;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\ElseIf_;
use PhpParser\Node\Stmt\Return_;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){

        $usuarios = DB::table('administradores')->where('id_admin',$request->user)->first();

        if(Hash::check($request->pwd, $usuarios->password)){
            return view('administrador.initadministrador');
        }
        else {
            return back()->withInput();
        }
    }
    public function index()
    {
        return view('administrador.initadministrador');
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
        //return $request->all();

        $administrador = new Administradore();

        $administrador->id_admin = $request->idadmin;
        $administrador->nombre = $request->nombre;
        $administrador->apellido1 = $request->apellido1;
        $administrador->apellido2 = $request->apellido2;
        $administrador->telefono = $request->telefono;
        $administrador->correo = $request->correo;
        $administrador->direccion = $request->direccion;
        $administrador->ciudad = $request->ciudad;
        $administrador->password = Hash::make($request->pwd);

        //return $administrador;
        
        $administrador->save();
        
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
    public function edit(Request $request)
    {
        //return $request

        $request->validate([
            'tipo' => 'required',
            'personas' => 'required',
            'base' => 'required'
        ]);

        $var = $request->base;
        $persons = DB::table($request->tipo)->where($var,$request->personas)->first();
        if($persons->$var === $request->personas){
            return view('administrador.actualizaciones', ['person'=>$persons, 'tipos'=>$request->tipo]);
         }
         else {
             return back()->withInput();
 
         }
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
