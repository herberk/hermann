<?php

//empresacreate
Route::get('creatempresa',['as' => 'empresas', 'uses' => 'EmpresaController@create','as' => 'creatempresa']);
Route::post('storempresa',['uses' => 'EmpresaController@storempresa','as' => 'storempresa']);
Route::get('empresa/index',['uses' => 'EmpresaController@index','as' => 'empresaindex']);
Route::get('empresa/edit/{id}',['uses' => 'EmpresaController@edit','as' =>'empresaedit']);
Route::get('/empresa/{id}', 'EmpresaController@show')
    ->where('id', '[0-9]+')
    ->name('empresa.show');

Route::put('empresa/update/{id}', ['as' =>  'empresa/update', 'uses' => 'EmpresaController@update']);
Route::patch('/empresa/{empresa}/papelera', 'EmpresaController@trash')->name('empresa.trash');
Route::get('empresa/restore/{id}', ['as' =>  'empresa/restore', 'uses' => 'EmpresaController@restore']);
Route::delete('/empresa/{id}', 'EmpresaController@destroy')->name('empresa.destroy');
Route::get('empresa/papelera', 'EmpresaController@trashed')->name('empresa.trashed');

Route::get('empresa/shownotas/{id}','EmpresaController@shownotas')->name('empresashownotas');
Route::put('empresa/updatenota/{id}',['as' =>  'empresa/updatenota', 'uses' => 'EmpresaController@updatenota']);

Route::get('logo/{id}', 'EmpresaController@logo')->name('logo');
Route::post('logo/{id}', 'EmpresaController@update_logo')->name('logo');

Route::get('empresa/juradas/{id}',['uses' => 'EmpresaController@selecjurada','as' => 'empresajuradas']);
Route::put('juradasselstore/{id}',['uses' => 'EmpresaController@update_seljurada','as' => 'juradasselstore']);
Route::get('empresaexports/{ano}/{pd}', 'EmpresaController@exports')->name('empresaexports');
Route::get('/empresa/excel','EmpresaController@Export')->name('empresaexcel');

//contactos
Route::get('listacontactos',  'ContactoController@index')->name('listacontactos');
Route::get('/contactos/papelera', 'ContactoController@trashed')->name('contactos.trashed');
Route::get('contacto/create','ContactoController@create')->name('contactocreate');
Route::post('storecontacto',['uses' => 'ContactoController@store','as' =>'storecontacto']);
Route::get('/contacto/edit/{id}','ContactoController@edit')->name('contactoedit');
Route::put('contacto/update/{id}', ['as' =>  'contacto/update', 'uses' => 'ContactoController@update']);
Route::get('contacto/trash/{id}', ['as' => 'contacto/trash', 'uses' => 'ContactoController@trash']);
Route::get('contacto/restore/{id}', ['as' => 'contacto/restore', 'uses' => 'ContactoController@restore']);
Route::get('/contacto/excel','ContactoController@export')->name('contactoexcel');
Route::get('contacto/shownotas/{id}','ContactoController@shownotas')->name('contactoshownotas');
Route::put('contacto/updatenota/{id}',['as' =>  'contacto/updatenota', 'uses' => 'ContactoController@updatenota']);
Route::delete('/contacto/{id}', 'ContactoController@destroy')->name('contacto.destroy');


//Bancos
Route::get('bancos/index',['uses' => 'BancoController@index','as' => 'bancosindex']);
Route::post('/bancos/store','BancoController@store')->name('bancosstore');

//socios
Route::get('listasocios',  'SocioController@index')->name('listasocios');
Route::get('/socios/papelera', 'SocioController@trashed')->name('socios.trashed');
Route::get('socio/shownotas/{id}','SocioController@shownotas')->name('socioshownotas');
Route::put('socio/updatenota/{id}',['as' =>  'socio/updatenota', 'uses' => 'SocioController@updatenota']);
Route::get('/socio/excel','SocioController@export')->name('socioexcel');
Route::get('socio/create','SocioController@create')->name('socioscreate');
Route::get('/socio/edit/{id}','SocioController@edit')->name('socioedit');
Route::post('storesocios',['uses' => 'SocioController@store','as' =>'storesocios']);
Route::put('socio/update/{id}', ['as' =>  'socio/update', 'uses' => 'SocioController@update']);
Route::get('socio/trash/{id}', ['as' => 'socio/trash', 'uses' => 'SocioController@trash']);
Route::get('socio/restore/{id}', ['as' => 'socio/restore', 'uses' => 'SocioController@restore']);




