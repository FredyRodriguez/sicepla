@extends('material.layouts.dashboard')

{{--
  Dash del usuario, los links cambian segun el rol del usuario
--}}
@php
  $rol = auth()->user()->rol->nombre;
@endphp

@section('links')
  

    @includeWhen($rol == 'Super Administrador', 'sicepla.super-admin.super-admin-dash')
    @includeWhen($rol == 'Comandante de Unidad', 'sicepla.admin.administrador-dash')
    @includeWhen($rol == 'Ayudante', 'sicepla.ayudante.ayudante-dash')
    @includeWhen($rol == 'Jefe de Dependencia', 'sicepla.empleado.empleado-dash')

   

  
@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/global/plugins/bootstrap-toastr/toastr.min.css">
 @endpush

@push('plugins')
    <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
    <script>
        Object.assign(toastr.options, {
            positionClass: "toast-bottom-right"
        })
    </script>
@endpush
