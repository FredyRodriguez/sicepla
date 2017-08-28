@extends('layouts.dash')
@section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Usuarios'])
        <div id="app">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-condensed">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">Direccion</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Operacion</th>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr  class="text-center">                        
                            <td>{{$user->name}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->documento}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <button class="editar-modal btn btn-danger" title="Eliminar Usuario">
                                <!--<button class="editar-modal btn btn-danger" @click.prevent="destroy(user)">-->
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>        
    @endcomponent
</div>
@endsection