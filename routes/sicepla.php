<?php
Route::resource('usuarios','UserController');
Route::resource('departamentos', 'DepartamentoController');

Route::prefix('/perfil')->group(function (){
    Route::get('/', 'PerfilController@index')->name('perfil.index');
    Route::post('/', 'PerfilController@update')->name('perfil.update');
    Route::post('password', 'PerfilController@updatePassword')->name('perfil.password');
    Route::post('foto', 'PerfilController@fotoUp')->name('perfil.foto');
});

Route::prefix('departamentos/{departamento}')->group(function () {
    Route::get('actividad','ActividadController@index')->name('actividad.index');
    Route::get('actividades','ActividadController@show')->name('actividad.show');
    Route::any('actividad/create','ActividadController@create')->name('actividad.create');
    Route::any('activida','ActividadController@store')->name('actividad.store');
    /*Route::get('/actividad', '\App\Container\Sicepla\Src\Controllers\ActividadController@show')
        ->name('actividad');*/
});

//Route::resource('actividad','ActividadController');
