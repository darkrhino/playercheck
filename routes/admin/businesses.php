<?php
Route::group(['prefix' => 'businesses', 'namespace' => 'Businesses'], function(){
    Route::get('/', ['as' => 'admin.businesses.index', 'uses' => 'BusinessesController@index']);
    Route::group(['prefix' => '{id}'], function(){
        Route::get('/', ['as' => 'admin.businesses.show', 'uses' => 'BusinessesController@show']);
        Route::get('/edit', ['as' => 'admin.businesses.edit', 'uses' => 'BusinessesController@edit']);
        Route::patch('/update', ['as' => 'admin.businesses.update', 'uses' => 'BusinessesController@update']);
        Route::patch('/approve', ['as' => 'admin.businesses.approve', 'uses' => 'BusinessesController@approve']);
        Route::patch('/suspend', ['as' => 'admin.businesses.suspend', 'uses' => 'BusinessesController@suspend']);
        Route::patch('/enable', ['as' => 'admin.businesses.enable', 'uses' => 'BusinessesController@enable']);
    });
});