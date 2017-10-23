<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Formatos;
use App\Container\Sicepla\Src\Requests\FormatoStoreRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formatos = Formatos::all();
        return view('sicepla.super-admin.super-admin-formatos',[
            'formatos' => $formatos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sicepla.super-admin.super-admin-crearformato');
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
          $request->url->move(public_path('SuperAdmin/Formatos'), $url);
        } else {
          if ('url' == null) {
            $url = "";
          }
        }

        Formatos::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'url' => $url,
        ]);
        return redirect('/formatos')->with('success','Formato Creado Correctamente');   
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
        $formato = Formatos::find($id);
        Storage::disk('formatos')->delete($formato->url);
        $formato->delete();
        return redirect('/formatos')->with('error','Formato Eliminado Correctamente');
    }
}
