<?php

namespace medic\Http\Controllers;

use Illuminate\Http\Request;

use medic\Http\Requests;

use medic\Paciente;
use medic\Turno;
use medic\Informe;
use medic\Evolucion;
use medic\Antecedente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes_normales = Paciente::orderBy('apellido', 'asc')->where('discapacidad','=','1')->get();
        $pacientes_discapacidad = Paciente::orderBy('apellido', 'asc')->where('discapacidad','=','2')->get();
        $pacientes_sordos = Paciente::orderBy('apellido', 'asc')->where('discapacidad','=','3')->get();
        return view('pacientes.index') ->with([
                'pacientes_normales'=>$pacientes_normales,
                'pacientes_discapacidad'=>$pacientes_discapacidad,
                'pacientes_sordos'=>$pacientes_sordos,
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$clientes = Cliente::orderBy('apellido')->get();
        //$vehiculos = Vehiculo::orderBy('marca')->get();
        return view('pacientes.create')->with([
                //'clientes'=>$clientes,
                //'vehiculos'=>$vehiculos,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Paciente::find($id);
        $antecedentes = $p->antecedentes;
        $turnos = $p->turnos;
        $evoluciones = $p->evoluciones;
        $informes = $p->informes;
        $test_dictado = $p->test_dictado;
        $test_vocales = $p->test_vocales;

        return view('pacientes.show')->with([
            'p'=> $p,
            'antecedentes'=> $antecedentes,
            'evoluciones'=> $evoluciones,
            'turnos'=> $turnos,
            'informes'=> $informes,
            'test_dictado'=> $test_dictado,
            'test_vocales'=> $test_vocales,
            ]);

        //$p = Paciente::find($id)->with('turno')->with('antecedente')->with('informe')->with('evolucion')->get();
        //return view('pacientes.show')->with('p', $p);
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
