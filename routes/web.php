<?php

Route::fallback(function(){
    return response()->view('errors.404', [], 404);
});

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');


//Rutas para mensajes
Route::get('contact-us',array('as'=>'getcontact','uses'=>'ConfigController@getContact'));                    //muestra la ventana de contacto
Route::post('contact-us',array('as'=>'postcontact','uses'=>'ConfigController@postContact'));
Route::get('ver-msge',array('as'=>'vermensage','uses'=>'ConfigController@vermensage'))->name('ver-msge');

Route::group(['middleware' => 'auth'], function () {
//Rutas para settings
    Route::get('/config', 'SettingController@index')->name('config');
    Route::post('/settings', 'SettingController@store')->name('settings.store');
    Route::get('/settings', 'SettingController@show')->name('settings');
    Route::get('/cacheclear', 'SettingController@cacheclear')->name('cacheclear' );
    Route::get('/exportset', 'SettingController@exportset')->name('exportset');
//Ruta para registro actividades
    Route::get('/activiti', 'SettingController@activity')->name('activiti');
    Route::get('/exportact', 'SettingController@exportact')->name('exportact');
//Ruta para seleccionar empresa
    Route::get('select/{id}', 'HomeController@selectstore')->name('select');
    Route::post('selectano', 'HomeController@storeano')->name('selectano');
});

Route::group([ 'namespace' => 'Auth'],function () {
    require __DIR__ . '/routes/auth.routes.php';
});
Route::group([ 'namespace' => 'User'], function () {
    require __DIR__ . '/routes/user.routes.php';
});
Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/empresas.routes.php';
});
Route::group([ 'namespace' => 'Tablas'], function () {
    require __DIR__ . '/routes/tablas.routes.php';
});
Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/juradas.routes.php';
});
Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/archivos.routes.php';
});
Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/capital.routes.php';
});