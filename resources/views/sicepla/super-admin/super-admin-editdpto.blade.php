@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Editar Dependencia'])
        <div id="app">
        {!!Form::model($departamento, ['route' => ['departamentos.update',$departamento], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
            <div class="form-group form-md-line-input">
                {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
            </div>
            <div class="form-group form-md-line-input">
                 {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','maxlength'=>'85'])!!}
            </div>
            {!! Form::submit('Editar', ['class'=>'btn green-jungle']) !!}
            {{link_to_route('departamentos.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            </div>
            {!! Form::close() !!}
        </div>
        @include('partials.modal-help-edit-depto')
    @endcomponent
</div>
@endsection
