{{--
|--------------------------------------------------------------------------
| Extends
|--------------------------------------------------------------------------
|
| Hereda los estilos y srcipts de la de la plantilla original.
| Es la base para todas las páginas que se deseen crear.
|
--}}
@extends('layouts.master')

{{--
|--------------------------------------------------------------------------
| Styles
|--------------------------------------------------------------------------
|
| Inyecta CSS requerido ya sea por un JS o para un elemento específico
|
| @push('styles')
|
| @endpush
--}}
@push('styles')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('assets/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endpush


{{--
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| Inyecta el título de la página a la etiqueta <title></title> de la plantilla
| Recibe texto o variables de los controladores
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('title', $miVariable)
| @section('title', 'Título')
--}}
@section('title', '| Login')

{{--
|--------------------------------------------------------------------------
| Content
|--------------------------------------------------------------------------
|
| Inyecta el contenido HTML que se usará en la página
|
| @section('content')
|
| @endsection
--}}
@section('content')
    <form action="{{ route('login') }}" id="form-login" role="form" method="post" novalidate>
        {{ csrf_field() }}
        <div class="form-body">
            <div class="row">
                <div class="col-xs-6">
                    @component('components.email', [
                        'name' => 'email',
                        'attributes' => "required autofocus",
                        'label' => 'Correo',
                        'help' => 'Digita el correo'
                    ])
                    @endcomponent
                </div>
                <div class="col-xs-6">
                    @component('components.password', [
                        'name' => 'password',
                        'attributes' => "required",
                        'label' => 'Contraseña',
                        'help' => 'Digita la contraseña'
                    ])
                    @endcomponent
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6">
                <div class="rem-password">
                    @component('components.checkbox', [
                        'name' => 'remember',
                        'label' => 'Recordarme'
                    ])
                    @endcomponent

                    <div class="row text-danger text-center">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <input class="btn green" type="submit" value="Ingresar">
            </div>
            <div class="col-sm-12 text-right">
               {{-- <div class="forgot-password">
                    <a href="{{ route('password.request') }}" class="forget-password">
                        ¿Se te olvidó tu contraseña?
                    </a>
                    <br>
                    <a href="{{ route('register') }}" class="font-blue-dark">
                        Registrarse
                    </a>
                </div><br>  
                <div>--}}
                    <button data-toggle="modal" data-target="#formatos" class="btn green">
                      <i class="fa fa-plus"></i>
                        Formatos
                    </button>
                </div>
                {{--modal--}}
                <div class="modal fade" id="formatos">
                    <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Formatos</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <table id="data" class="table table-hover table-bordered table-condensed">
                                            <thead>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Descripcion</th>
                                                <th class="text-center">Visualizar</th>
                                            </thead>
                                            <tbody>
                                            @foreach($formatos as $formato)
                                                <tr  class="text-center">
                                                    <td>{{$formato->nombre}}</td>
                                                    <td>{{$formato->descripcion}}</td>
                                                    <td><a href="SuperAdmin/Formatos\{{$formato->url}}" target="_blank"><button type="button" class="btn btn-info" title="Visualizar"><i class="fa fa-eye"></i></button></a></td>
                                                </tr>
                                                @endforeach
                                            </tbody> 
                                        </table>
                                    </div>
                                        
                                </div>
                                <div class="modal-footer" slot="footer">
                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                {{--fin modal--}}
            </div>            
        </div>
    </form>
    <!-- END : LOGIN PAGE 5-1 -->


@endsection

@push('plugins')
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/pages/scripts/login-5.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/main/scripts/form-validation-md.js') }}" type="text/javascript"></script>
@endpush

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts para inicializar componentes Javascript como
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}
@push('styles')
  <link rel="stylesheet" href="/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css">
@endpush
@push('functions')
<script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/pages/scripts/table-datatable.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>

  <script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

  <script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>

  <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="/js/DataTable.js" type="text/javascript">
          </script>





    <script type="text/javascript">
        var rules = {
            email: { email: true, required: true },
        };
        var messages = { };
        var form = $('#form-forget');
        $(function() {
            FormValidationMd.init(form, rules, messages);
        });
    </script>


    
@endpush
