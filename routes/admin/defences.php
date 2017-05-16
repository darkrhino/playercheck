<?php
Route::group(['prefix' => 'defences', 'namespace' => 'Defences'], function(){
    Route::get('/', ['as' => 'admin.defences.index', 'uses' => 'DefencesController@index']);
    Route::post('/store', ['as' => 'admin.defences.store', 'uses' => 'DefencesController@store']);
});