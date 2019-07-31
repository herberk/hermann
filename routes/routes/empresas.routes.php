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
Route::get('/restore/{id}', ['as' =>  'empresas/restore', 'empresas' => 'EmpresaController@restore']);
Route::delete('/empresa/{id}', 'EmpresaController@destroy')->name('empresa.destroy');
Route::get('empresa/papelera', 'EmpresaController@trashed')->name('empresa.trashed');


//Route::get('enconstrucion', 'EmpresaController@enconstrucion');

Route::get('empresa/shownotas/{id}','EmpresaController@shownotas')->name('empresashownotas');
Route::put('empresa/updatenota/{id}',['as' =>  'empresa/updatenota', 'uses' => 'EmpresaController@updatenota']);

Route::get('logo/{id}', 'EmpresaController@logo')->name('logo');
Route::post('logo/{id}', 'EmpresaController@update_logo')->name('logo');

Route::get('empresa/juradas/{id}',['uses' => 'EmpresaController@selecjurada','as' => 'empresajuradas']);
Route::put('juradasselstore/{id}',['uses' => 'EmpresaController@update_seljurada','as' => 'juradasselstore']);

Route::get('/empresa/excel','EmpresaController@Export')->name('empresaexcel');

//contactos
Route::get('/contactos', function () {
    return view('empresas.contactos.contactos', [
        'view' => 'index',
    ]);
});

Route::get('/contactosQuery','ContactoController@contactosQuery')->name('contactosQuery');
Route::post('/contactoscreate','ContactoController@create')->name('contactoscreate');
Route::delete('/contactosdelete/{id}','ContactoController@destroy')->name('contactosdelete');
Route::put('/contactosupdate/{id}','ContactoController@update')->name('contactosupdate');
Route::put('/contactosnotas/{id}','ContactoController@notasupdate')->name('contactosnotas');

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


//Capital
Route::get('capital/index',['uses' => 'CapitalController@index','as' => 'capitalindex']);

