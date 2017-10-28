@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Usuarios'])
        <div id="app">
        {!! Form::open(['route'=>'usuarios.store','method'=>'POST']) !!}                        
           <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required'])!!}
                    </div>
                </div>
            </div>            
            <div class="form-group form-md-line-input">                                 
                    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required'])!!}
            </div> 
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','required'])!!}
                    </div> 
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group form-md-line-input">                                 
                        {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña'])!!}
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">
                        <label>Rol</label>
                            <select class="form-control" name="FK_RolesId" id="" required="">
                                @foreach($roles as $rol)
                                    <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                                @endforeach
                            </select>                
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group form-md-line-input">
                    <label>Dependencia</label>
                        <select class="form-control" name="FK_DepartamentoId" id="" >
                            <option value="">Seleccionar</option>
                            @foreach($users as $departamento)
                                <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                            @endforeach
                        </select>                
                    </div>
                </div>
            </div>
            {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            </div>                        
            {!! Form::close() !!}
        </div>       
        @include('partials.modal-help-crear-usuario') 
    @endcomponent
</div>
@endsection