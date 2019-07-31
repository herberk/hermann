<?php

/*use App\models\Tablas\Atributo;*/
use App\models\Tablas\Comunas;
use App\models\Tablas\Giros;

Route::get('giros',['as' => 'giros',
    'uses' => 'girosController@giros'
]);
Route::get('girosxls', 'girosController@Exports')->name('girosxls');;



Route::get('autocomplete/giros',function(){
    $term = Request::get('term');
    return Giros::findByNameOrCodigo($term);
});
Route::get('autocomplete/codigogiros',function(){
    $term = Request::get('term');
    return Giros::findByCodeOrName($term);
});

//Tipo_atributo
Route::get('/Tipo_atributo', function () {
    return view('tablas.tipos.tipo_atri');
});
Route::get('/Tipo_Query','TipoatrController@tipos_Query')->name('Tipo_Query');
Route::get('/Atributo_Query','TipoatrController@atributo_Query')->name('Atributo_Query');
Route::get('/hayQuery','TipoatrController@hayatri')->name('hayQuery');

Route::post('/tipocreate', 'TipoatrController@tipocreate')->name('tipocreate');
Route::delete('/tipodelete/{id}','TipoatrController@tipodelete')->name('tipodelete');
Route::put('/tipoupdate/{id}','TipoatrController@tipoupdate')->name('tipoupdate');
Route::post('/atributocreate', 'TipoatrController@atributocreate')->name('atributocreate');
Route::delete('/atributodelete/{id}','TipoatrController@atributodelete')->name('atributodelete');
Route::put('/atributoupdate/{id}','TipoatrController@atributoupdate')->name('atributoupdate');

Route::get('atributo/Exports', 'TipoatrController@Exports')->name('atributo/Exports');

/*Route::get('/contar/{total}', function($total){
    $total= Atributo::where('tipos_id', $total)->count();
    return [
        'total' => $total
    ];
});*/
Route::get('atributos/{tipo_id}', function ($tipos_id) {
    $atributos = Atributo::where('tipos_id', $tipos_id)
        ->select('id as value', 'name as text')
        ->orderBy('name', 'ASC')
        ->get()
        ->toArray();
    array_unshift($atributos, ['value' => '', 'text' => 'Selecione Atributo']);
    return $atributos;
});
//Regiones Comunas
Route::get('locaciones/', function () {
    return view('tablas.locaciones.locaciones');
});
Route::get('/locacionesQuery','locacionesController@locaciones_Query')->name('locacionesQuery');
Route::get('/hayComunas','locacionesController@hayComunas')->name('hayComunas');
//Ciudades

Route::get('/ciudadQuery','locacionesController@ciudadQuery')->name('ciudadQuery');
Route::post('/ciudadcreate','locacionesController@create')->name('ciudadcreate');
Route::delete('/ciudaddelete/{id}','locacionesController@destroy')->name('ciudaddelete');
Route::put('/ciudadupdate/{id}','locacionesController@update')->name('ciudadupdate');

/*Route::get('drop', function () {
    return view('tablas/locaciones/Reg_com');//,compact('region_id')
});*/

Route::get('comunas/{region_id}', function ($regiones_id) {
    $comunas = Comunas::where('regiones_id', $regiones_id)
        ->select('id as value', 'name as text')
        ->orderBy('name', 'ASC')
        ->get()
        ->toArray();
    array_unshift($comunas, ['value' => '', 'text' => 'Selecione Comuna']);
   return $comunas;
});


