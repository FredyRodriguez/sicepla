@extends('layouts.dash')

@section('content')
<div class="col-md-12">
{{--Inicio Mensaje Confirmar--}}
@include('sicepla.alerts.success')
@include('sicepla.alerts.error')
@include('sicepla.alerts.errors')
{{--Fin Mensaje Confirmar--}}
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Actividades'])
        <div id="app">
        {{--boton crear departamento--}}
            <div>
                <a href="{{route('actividad.create',['departamento' => $departamento->id])}}" class="btn green-jungle">
                    <i class="fa fa-plus"></i>
                       Crear Actividad
                </a>
             </div>   <br>
             {{--fin boton crear departamento--}}
            {{--inicio tabla--}}
           {{-- <div class="table-responsive">
                <table id="data" class="table table-hover table-bordered table-condensed">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">Direccion</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Departamento</th>
                        <th class="text-center">Eliminar</th>
                    </thead>

                    <tbody>
                      @foreach($users as $user)
                        <tr  class="text-center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->documento}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->email}}</td>
                            @if(isset($user->departamento))
                                <td>{{$user->departamento->nombre}}</td>
                            @else
                                <td>No Aplica</td>
                            @endif
                            <td>{!!Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy',$user->PK_id]])!!}
                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>--}}
        </div>
    @endcomponent
</div>
@endsection