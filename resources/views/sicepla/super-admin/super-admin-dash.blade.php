@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Usuarios',
    'link' => route('usuarios.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Departamento',
    'link' => route('departamentos.index')
])
@endcomponent