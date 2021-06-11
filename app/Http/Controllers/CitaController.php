<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personal.initdoctor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.initpersonal');
    }

    public function buscador(Request $request){
        $datos = Cliente::find($request->expediente);

        $data = DB::table('citas')->where('num_expe', '=', $datos->num_expe)->first();;

        //return $data;
        return view('personal.citanueva', ['busca' => $datos, 'cita' => $data]);
    }

    public function mostrar(){
        $datos = Cliente::all();

        $G = [];
        foreach ($datos as $nombre){                             
        $data = Cita::all()->where('num_expe', '=', $nombre->num_expe);
        
        $G[$nombre->num_expe] = $data;
        }

        return view('personal.visualizacion', ['busca' => $datos, 'cita' => $G]);
    }

    public function visita(){
        $datos = Cliente::all();

        $G = [];
        foreach ($datos as $nombre){                             
        $data = Cita::all()->where('num_expe', '=', $nombre->num_expe);
        
        $G[$nombre->num_expe] = $data;
        }

        return view('personal.actualizar', ['busca' => $datos, 'cita' => $G]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Cita();

        $data->num_radiogra = $request->radio;
        $data->tratamiento = $request->tratami;
        $data->descripcion = $request->descripcion;
        $data->num_expe = $request->id;
        
        $data->save();

        return view('personal.comprobacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $datos = Cliente::find($request->id);

        return view('personal.cita', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $datos = Cita::find($request->numero);

        $datos->num_radiogra = $request->radio;
        $datos->tratamiento = $request->tratami;
        $datos->descripcion = $request->descripcion;
        $datos->num_expe = $request->id;

        $datos->save();
        return view('personal.comprobacion');
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
        $datos = Cita::find($request->id);

        $datos->num_radiogra = $datos->num_radiogra;
        $datos->tratamiento =  $datos->tratamiento;
        $datos->descripcion = $datos->descripcion;
        $datos->fecha = $request->fecha;
        $datos->hora = $request->hora;
        $datos->cita = $request->cita;
        $datos->num_expe = $request->expediente;

        //return $datos;

        $datos->save();

        return redirect()->route('cita.visita');
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
