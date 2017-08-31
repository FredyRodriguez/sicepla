@extends('layouts.dash')
@section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Editar Departamento'])
        <div id="app">
        {!!Form::model($departamento, ['route' => ['departamentos.update',$departamento], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
            <div class="form-group form-md-line-input">
                {!!Form::text('nombre',['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
            </div>
            <div class="form-group form-md-line-input">
                 {!!Form::text('descripcion',['class'=>'form-control','placeholder'=>'Descripcion','required','maxlength'=>'85'])!!}
            </div>
            {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    @endcomponent
</div>
@endsection
