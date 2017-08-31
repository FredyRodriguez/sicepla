@extends('layouts.dash')
@section('content')
<div class="col-md-12">
{{--Inicio Mensaje Confirmar--}}
<?php $message = Session::get('message')?>
@if($message == 'store')
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
        </button>
        Usuario Creado Correctamente
    </div>
@endif
{{--Fin Mensaje Confirmar--}}
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Usuarios'])
        <div id="app">
        {{--boton crear departamento--}}
            <div>
                <a href="{{route('usuarios.create')}}" class="btn green-jungle">
                    <i class="fa fa-plus"></i>
                       Crear Usuario
                </a>
             </div>   <br>
             {{--fin boton crear departamento--}}
            {{--inicio tabla--}}
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-condensed">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">Direccion</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Departamento</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr  class="text-center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->documento}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->departamento}}</td>
                            <td><button class="editar-modal btn blue" title="Editar Usuario">
                                  <span class="glyphicon glyphicon-pencil"></span>
                              </button>
                            </td>
                            <td>{!!Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy',$user->PK_id]])!!}
                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                {!!Form::close()!!}
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
