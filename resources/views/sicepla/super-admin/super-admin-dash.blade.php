@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Usuarios',
    'link' => route('usuarios.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Dependecias',
    'link' => route('departamentos.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Formatos',
    'link' => route('formatos.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-area-chart',
    'title' => 'Estadisticas',
    'link' => route('estadistica.index')
])
@endcomponent