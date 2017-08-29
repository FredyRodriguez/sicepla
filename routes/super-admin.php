<?php


Route::get('/usuarios','UserController@index')->name('usuarios');
Route::get('/departamentos','DepartamentoController@index')->name('departamentos');
Route::post('/departamentos','DepartamentoController@store')->name('departamentos.store');