<?php
Route::group(['prefix' => 'businesses', 'namespace' => 'Businesses'], function(){
    Route::get('/', ['as' => 'admin.businesses.index', 'uses' => 'BusinessesController@index']);
    Route::get('/create', ['as' => 'admin.businesses.create', 'uses' => 'BusinessesController@create']);
    Route::post('/store', ['as' => 'admin.businesses.store', 'uses' => 'BusinessesController@store']);
    Route::group(['prefix' => '{id}'], function(){
        Route::get('/', ['as' => 'admin.businesses.show', 'uses' => 'BusinessesController@show']);
        Route::get('/edit', ['as' => 'admin.businesses.edit', 'uses' => 'BusinessesController@edit']);
        Route::patch('/update', ['as' => 'admin.businesses.update', 'uses' => 'BusinessesController@update']);
        Route::patch('/approve', ['as' => 'admin.businesses.approve', 'uses' => 'BusinessesController@approve']);
        Route::patch('/suspend', ['as' => 'admin.businesses.suspend', 'uses' => 'BusinessesController@suspend']);
        Route::patch('/enable', ['as' => 'admin.businesses.enable', 'uses' => 'BusinessesController@enable']);
        Route::patch('/reject', ['as' => 'admin.businesses.reject', 'uses' => 'BusinessesController@reject']);
        Route::post('/destroy', ['as' => 'admin.businesses.destroy', 'uses' => 'BusinessesController@destroy']);
        Route::group(['prefix' => 'members'], function(){
            Route::get('/', ['as' => 'admin.businesses.members.index', 'uses' => 'MembersController@index']);
            Route::post('/', ['as' => 'admin.businesses.members.store', 'uses' => 'MembersController@store']);
            Route::get('/{user-id}', ['as' => 'admin.businesses.members.show', 'uses' => 'MembersController@show']);
            Route::get('/{user-id}/destroy', ['as' => 'admin.businesses.members.destroy', 'uses' => 'MembersController@destroy']);
        });
    });
});