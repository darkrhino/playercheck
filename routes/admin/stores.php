<?php
Route::group(['prefix' => 'stores', 'namespace' => 'Stores'], function(){
    Route::get('/', ['as' => 'admin.stores.index', 'uses' => 'StoresController@index']);
    Route::get('/create', ['as' => 'admin.stores.create', 'uses' => 'StoresController@create']);
    Route::post('/store', ['as' => 'admin.stores.store', 'uses' => 'StoresController@store']);
    Route::group(['prefix' => '{store_id}'], function(){
        Route::get('/', ['as' => 'admin.stores.show', 'uses' => 'StoresController@show']);
        Route::get('/edit', ['as' => 'admin.stores.edit', 'uses' => 'StoresController@edit']);
        Route::patch('/update', ['as' => 'admin.stores.update', 'uses' => 'StoresController@update']);
        Route::post('/destroy', ['as' => 'admin.stores.destroy', 'uses' => 'StoresController@destroy']);
    });
});