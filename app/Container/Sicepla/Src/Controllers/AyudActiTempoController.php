<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Departamento;
use App\Container\Sicepla\Src\ActividadTemporal;
use App\Container\Sicepla\Src\Requests\FormatoStoreRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AyudActiTempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$plazos = ActividadTemporal::all();
        $plazos = ActividadTemporal::with('departamento')->get();
        return view('sicepla.ayudante.ayudante-activTemporal',compact('plazos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dependencias = Departamento::all();
        return view('sicepla.ayudante.ayudante-crearActivTempo',compact('dependencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormatoStoreRequest $request)
    {
        $url = "";
        if ($request->hasFile('url')) {
          $url = "Formato".'.'.time().'.'.$request->url->getClientOriginalExtension();
          $request->url->move(public_path('Ayudante/Formatos'), $url);
        } else {
          if ('url' == null) {
            $url = "";
          }
        }

        ActividadTemporal::create([
            'nombre' => $request['nombre'],
            //'observacion' => $request['observacion'],
            'FK_DepartamentoId' => $request['FK_DepartamentoId'],
            'tipo_entrega' => $request['tipoEntrega'],
            'tipo_dia' => $request['tipoDia'],
            'Num_Dia' => $request['num_dia'],
            'fecha' => $request['fechaD'],
            'hora' => $request['horaD'],
            'url' => $url,
        ]);
        return redirect('/activtemporal')->with('success','Actividad Temporal Creado Correctamente'); 
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
        $plazo = ActividadTemporal::find($id);
        Storage::disk('formatos')->delete($plazo->url);
        $plazo->delete();
        return redirect('/activtemporal')->with('error','Formato Eliminado Correctamente');
    }
}
