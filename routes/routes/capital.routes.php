<?php
// Capitals
Route::get('/capital', 'CapitalController@index')
    ->name('capital.index');

Route::get('/capital/{us}', 'CapitalController@show')
    ->where('user', '[0-9]+')
    ->name('Capital.show');

Route::get('/capitalcreate', 'CapitalController@create')->name('capitalcreate');
Route::post('capitalstore', 'CapitalController@store')->name('capitalstore');

Route::get('/capitaledit', 'CapitalController@edit')->name('Capital.edit');
Route::put('/capitalup/{Capital}', 'CapitalController@update')->name('Capitalup');
Route::get('capitalexports/{ano}/{pd}', 'CapitalController@exports')->name('capitalexports');