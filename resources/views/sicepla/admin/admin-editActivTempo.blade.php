@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Editar Plazos Temporales'])
        <div id="app">
        {!!Form::model($admintempo, ['route' => ['admintempo.update', $admintempo], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                         {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','readonly'=>'readonly'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                        {!!Form::text('FK_DepartamentoId',null,['class'=>'form-control','placeholder'=>'Descripcion','readonly'=>'readonly','maxlength'=>'85'])!!}
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                        <label for="">Tipo Dia</label>
                        {!!Form::text('tipo_dia',null,['class'=>'form-control','placeholder'=>'Tipo Dia No Solicitado','readonly'=>'readonly','maxlength'=>'85'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                         <label for="">Dia de Mes</label>
                        {!!Form::text('Num_Dia',null,['class'=>'form-control','placeholder'=>'Dia No Solicitado','readonly'=>'readonly','maxlength'=>'85'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                        <label for="">Fecha</label>
                        {!!Form::text('fecha',null,['class'=>'form-control','placeholder'=>'Fecha No Solicitado','readonly'=>'readonly','maxlength'=>'85'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                        <label for="">Hora</label>
                        {!!Form::text('hora',null,['class'=>'form-control','placeholder'=>'Hora No Solicitado','readonly'=>'readonly','maxlength'=>'85'])!!}
                    </div>
                </div>
            </div>
            <div class="form-group form-md-line-input">
                 {!!Form::text('observacion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','autofocus'=>'autofocus','maxlength'=>'85'])!!}
            </div>

            {!! Form::submit('Editar', ['class'=>'btn green-jungle']) !!}
            {{link_to_route('admintempo.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            </div>
            {!! Form::close() !!}
        </div>
    @endcomponent
</div>
@endsection