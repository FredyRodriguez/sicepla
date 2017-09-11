@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Usuarios'])
        <div id="app">
        {!! Form::open(['route'=>'usuarios.store','method'=>'POST']) !!}                        
            <div class="form-group form-md-line-input">                                 
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
            </div>
            <div class="form-group form-md-line-input">                                 
                {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required'])!!}
            </div> 
            <div class="form-group form-md-line-input">                                 
                    {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required'])!!}
            </div>
            <div class="form-group form-md-line-input">                                 
                {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
            </div>
            <div class="form-group form-md-line-input">                                 
                    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required'])!!}
            </div>                            
            <div class="form-group form-md-line-input">                                 
                {!!Form::password('contraseña',['class'=>'form-control','placeholder'=>'Contraseña','required'])!!}
            </div>        
            <div class="form-group form-md-line-input">                                 
                    {!!Form::password('confircontraseña',['class'=>'form-control','placeholder'=>'Confirmar Contraseña'])!!}
            </div>  
            {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            </div>                        
            {!! Form::close() !!}
        </div>        
    @endcomponent
</div>
@endsection