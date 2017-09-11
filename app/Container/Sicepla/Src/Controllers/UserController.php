<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Container\Sicepla\Src\Requests\UserStoreRequest;
use App\Container\Sicepla\Src\User;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Departamento;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // User::all();

        $users = User::all();
        return view('sicepla.super-admin.super-admin-usuarios',compact('users'));
        //return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Departamento::all();
        return view('sicepla.super-admin.super-admin-crearuser',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $atributos = $request->only(
            'name',
            'telefono',
            'documento',
            'direccion',
            'email',
            'password'
        );
        
        $user = new User($atributos);
        $user->password = bcrypt($user->password);
        $user->save();
        return redirect()->route('usuarios.index')->with('success','Usuario Creado Correctamente');
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
    public function destroy($users)
    {
        User::destroy($users);
        return redirect()->route('usuarios.index')->with('error','Usuario Eliminado Correctamente');
    }

}
