@extends('layouts.dash')

@section('content')

@section('content')
    <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'icon-layers', 'title' => 'Sistema Centralizador de Información Para el Control de Plazos '])

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Introducción','contenido'=>'El Ejército Nacional en busca de la transformación y la mejora de los diferentes procesos administrativos de las unidades militares a evidenciando falencias en el cumplimiento de plazos por parte de los miembros de las Planas Mayores llevando al no fortalecimiento de la unidad.','class'=>'panel-success'])
            @endcomponent

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Beneficios','contenido'=>'Al implementar este sistema integral centralizador de información se beneficia el personal de planta de la escuela de comunicaciones. A su vez contribuye a implementar las nuevas políticas de planificación del Ejercito y a mejorar el control en el cumplimiento de los plazos de las dependencias.','class'=>'panel-info'])
            @endcomponent

             @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Política Calidad','contenido'=>'Precisar las características que debe tener el servidor con el que se va a administrar la plataforma web. Verificar el funcionamiento por medio de pruebas de campo en la ESCOM del sistema en tiempo real con el fin de identificar posibles fallas.','class'=>'panel-warning'])
             @endcomponent

             @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Objetivos Calidad','contenido'=>'Implementar una herramienta sistemática que aplicada en una plataforma web centralice y controle el cumplimiento de los plazos de las dependencias de la ESCOM.','class'=>'panel-primary'])
             @endcomponent

        @endcomponent

        {{-- END HTML SAMPLE --}}
    </div>
@endsection
  

@endsection
