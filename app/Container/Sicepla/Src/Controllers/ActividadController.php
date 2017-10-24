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
          'departamento' => $departamento->load('actividad'),
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
       // dump($request['tipoDia']);
        Actividad::create([
            'nombre' => $request['nombre'],
            'observacion' => $request['observacion'],
            'tipo_entrega' => $request['tipoEntrega'],
            'tipo_dia' => $request['tipoDia'],
            'Num_Dia' => $request['num_dia'],
            'fecha' => $request['fechaD'],
            'hora' => $request['horaD'],
            'FK_DepartamentoId' => $departamento->id ,
        ]);
        
        return redirect('/departamentos')->with('success','Actividad Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $id = Actividad::
                    select('tbl_actividad.id','tbl_actividad.nombre','tbl_actividad.tipo_entrega','tbl_actividad.tipo_dia', 'tbl_actividad.Num_Dia',
                           'tbl_actividad.fecha', 'tbl_actividad.hora','tbl_actividad.observacion')
                          ->join('tbl_departamento','tbl_actividad.FK_DepartamentoId','=','tbl_departamento.id')
                          ->where('tbl_departamento.id','=', $id)
                          ->get();
      return view('sicepla.super-admin.super-admin-actividad', [
          'actividades'  => $id,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('sicepla.super-admin.super-admin-actividad', [
          'departamento' => $departamento->load('actividad'),
          'actividad'    => $actividad,
      ]);
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
    public function destroy($actividad)
    {
         Actividad::destroy($actividad); 
      return redirect('/departamentos')->with('error','Actividad Eliminada Correctamente'); 
    }
}
