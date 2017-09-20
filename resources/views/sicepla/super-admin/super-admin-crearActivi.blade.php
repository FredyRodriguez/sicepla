@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Actividad para el departamento ' . $departamento->nombre])
        <div id="app">
        {!! Form::open(['route'=>['actividad.store','departamento' =>$departamento->id],'method'=>'POST']) !!}
                               
                <div class="form-group form-md-line-input">
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
                </div>
                <div class="form-group form-md-line-input">
                    {!!Form::text('observacion',null,['class'=>'form-control','placeholder'=>'Observacion','required','maxlength'=>'85'])!!}
                </div>
                 <div class="form-group form-md-line-input">
                    <label>Tipo Entrega</label>
                    <select class="form-control" name="tipoEntrega" id="tipoEntrega" required="">
                            <option value="">Seleccionar</option>
                            <option value="1">Dia</option>
                            <option value="2">Diario</option>
                            <option value="3">Semanal</option>
                            <option value="4">Mensual</option>
                    </select>
                </div>
                <div class="form-group form-md-line-input tipoDia1">
                    <label>Tipo Dia</label>
                    <select class="form-control" name="tipoDia" id="tipoDia" required="">
                            <option value="">Seleccionar</option>
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miercoles</option>
                            <option value="4">Jueves</option>
                            <option value="5">Viernes</option>
                            <option value="6">Sabado</option>
                            <option value="7">Domingo</option>
                    </select>
                </div>
                <div class="form-group form-md-line-input num_dia1">
                    <label>Dia del Mes</label>
                    {!!Form::number('num_dia',null,['class'=>'form-control','placeholder'=>'Dia','min'=>'1','max'=>'30'])!!}
                </div>
                <div class="form-group form-md-line-input fecha1">
                    <label class="">Fecha</label>
                    {!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                </div>
                <div class="form-group form-md-line-input hora1">
                    <label>Hora</label>
                    {!! Form::time('hora', \Carbon\Carbon::now(),['class'=>'form-control'])!!}
                </div>
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            {!! Form::close() !!}
    @endcomponent
</div>
@endsection
@push('functions')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script>
jQuery(document).ready(function(){
    $('.fecha1').hide();
    $('.hora1').hide();
    $('.num_dia1').hide();
    $('.tipoDia1').hide();

    $("#tipoEntrega").on('change',function(){
    var tipo = $('select[name="tipoEntrega"]').val();
    if(tipo == 1){
        $('.fecha1').show();
        $('.hora1').show();
        $('.num_dia1').hide();
        $('.tipoDia1').hide();

    }
    if(tipo == 2){
        $('.fecha1').hide();
        $('.hora1').show();
        $('.num_dia1').hide();
        $('.tipoDia1').hide();

    }
    if(tipo == 3){
        $('.fecha1').hide();
        $('.tipoDia1').show();
        $('.hora1').show();
        $('.num_dia1').hide();

    }
    if(tipo == 4){
        $('.fecha1').hide();
        $('.hora1').hide();
        $('.num_dia1').show();
        $('.tipoDia1').hide();

    }

    });
});

</script>
@endpush
