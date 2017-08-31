@extends('layouts.dash')
@section('content')
<div class="col-md-12">
{{--Inicio Mensaje Confirmar--}}
@include('sicepla.alerts.success')
@include('sicepla.alerts.error')
@include('sicepla.alerts.errors')
{{--Fin Mensaje Confirmar--}}
    @component('components.portlet', ['icon' => 'fa fa-object-group', 'title' => 'Departamento'])
        <div id="app">
            {{--boton crear departamento--}}
                <div>
                    <a  href="{{route('departamentos.create')}}" class="btn green-jungle">
                        <i class="fa fa-plus"></i>
                        Crear Departamento
                    </a>
                </div>
            {{--fin boton crear departamento--}}
            <!-- Modal crear departamento -->
            <div id="crear-departamento" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Crear Departamento</h4>
                        </div>
                        <div class="modal-body">
                        {!! Form::open(['route'=>'departamentos.store','method'=>'POST']) !!}
                            <div class="form-group form-md-line-input">
                                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'15'])!!}
                            </div>
                            <div class="form-group form-md-line-input">
                            {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'descripcion','required','maxlength'=>'85'])!!}</div>

                        </div>
                        <div class="modal-footer">
                        {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
                        {!! Form::submit('cancelar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div> <br>
            <!--Fin Modal crear departamento-->
            {{--inicio tabla--}}
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-condensed">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </thead>
                    @foreach($departamentos as $departamento)
                    <tbody>
                        <tr  class="text-center">
                            <td>{{$departamento->nombre}}</td>
                            <td>{{$departamento->descripcion}}</td>
                            <td>{{link_to_route('departamentos.edit', $title = '', $parameter = $departamento->id, $attributes = ['class' => 'btn btn-simple btn-warning btn-icon edit icon-pencil'])}}
                            </td>

                            <td>@include('sicepla.super-admin.super-admin-deletedepartamento')
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            {{--fin tabla--}}
        </div>

    @endcomponent
</div>
@endsection
@push('styles')
  <link rel="stylesheet" href="/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css">
@endpush
@push('functions')
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>

  <script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

  <script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>


@endpush
