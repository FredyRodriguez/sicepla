@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Departamento'])
        <div id="app">
        {!! Form::open(['route'=>'departamentos.store','method'=>'POST']) !!}                        
            <div class="form-group form-md-line-input">                                 
                {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
            </div>
            <div class="form-group form-md-line-input">
                 {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','maxlength'=>'85'])!!}
            </div>                                                
            {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            </div>                        
            {!! Form::close() !!}
        </div>     
        @include('partials.modal-help-crear-departamento')   
    @endcomponent
</div>
@endsection