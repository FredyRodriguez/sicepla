<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Departamento;
use App\Container\Sicepla\Src\Actividad;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Departamento $departamento)
    {
        return view('sicepla.super-admin.super-admin-actividad', [
            'departamento' => $departamento->load('actividad')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Departamento $departamento)
    {
        return view('sicepla.super-admin.super-admin-crearActivi',compact('departamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Departamento $departamento, Request $request)
    {
        Actividad::create([
            'nombre' => $request['nombre'],
            'observacion' => $request['observacion'],
            'tipo_entrega' => $request['tipoEntrega'],
            'tipo_dia' => $request['tipoDia'],
            'Num_Dia' => $request['num_dia'],
            'fecha' => $request['fecha'],
            'hora' => $request['hora']
        ]);
        return redirect('/actividad')->with('success','Actividad Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('sicepla.super-admin.super-admin-actividad');
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
