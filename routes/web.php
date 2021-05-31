<?php

use Illuminate\Support\Facades\Route;

Route::resource('contacto', 'ContactoController')->names('contacto')->parameters(['contacto' => 'project']);

#Route::get('/contacto', 'ContactoController@index')->name('contacto.index');
#Route::get('/contacto/crear', 'ContactoController@create')->name('contacto.create');//tener cuidado con el orden de las rutas
#Route::get('/contacto/{project}/editar', 'ContactoController@edit')->name('contacto.edit');
#Route::patch('/contacto/{project}', 'ContactoController@update')->name('contacto.update');
#Route::delete('/contacto/{project}', 'ContactoController@destroy')->name('contacto.destroy');
#Route::post('/contacto', 'ContactoController@store')->name('contacto.store');
#Route::get('/contacto/{id}', 'ContactoController@show')->name('contacto.show');

Route::view('/informacion', 'informacion')->name('informacion'); //tener cuidado con las rutas que especifiquemos
Route::post('informacion', 'PostInfoController@store');

Auth::routes();

