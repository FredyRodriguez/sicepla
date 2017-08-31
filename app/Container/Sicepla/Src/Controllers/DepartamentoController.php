<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Departamento;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('sicepla.super-admin.super-admin-departamento',[
          'departamentos' => $departamentos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sicepla.super-admin.super-admin-creardpto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Departamento::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
        ]);
        return redirect('/departamentos')->with('success','Departamento Creado Correctamente');
/*
        $atributos = $request->only(
            'nombre',
            'descripcion'
        );
        $departamento = new Departamento($atributos);
        $departamento->save();
        return redirect()->route('departamentos.index');*/
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
    /*public function edit($id)
    {
        $departamento = Departamento::find($id);
        return view('sicepla.super-admin.super-admin-editdpto',['departamento'=>$departamento]);
    }
    */

    public function edit($departamento)
     {

         $depar = Departamento::find($departamento);
         return view('sicepla.super-admin.super-admin-editdpto',[
           'departamento' => $depar,
         ]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $departamento)
    {
      $depar = Departamento::find($departamento);
      $depar->fill($request->all());
      $depar->save();
      return redirect('/departamentos')->with('success','Departamento Modificado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($departamento)
    {
      Departamento::destroy($departamento);
      return redirect('/departamentos')->with('error','Departamento Eliminado Correctamente');
    }
}
