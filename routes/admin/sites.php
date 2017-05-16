<?php
Route::group(['prefix' => 'sites', 'namespace' => 'Sites'], function(){
    Route::get('/', ['as' => 'admin.sites.index', 'uses' => 'SitesController@index']);
    Route::get('/create', ['as' => 'admin.sites.create', 'uses' => 'SitesController@create']);
    Route::post('/store', ['as' => 'admin.sites.store', 'uses' => 'SitesController@store']);
    Route::group(['prefix' => '{site_id}'], function(){
        Route::get('/', ['as' => 'admin.sites.show', 'uses' => 'SitesController@show']);
        Route::get('/edit', ['as' => 'admin.sites.edit', 'uses' => 'SitesController@edit']);
        Route::patch('/update', ['as' => 'admin.sites.update', 'uses' => 'SitesController@update']);
        Route::post('/destroy', ['as' => 'admin.sites.destroy', 'uses' => 'SitesController@destroy']);
        Route::group(['prefix' => 'members'], function(){
           Route::get('/', ['as' => 'admin.sites.members.index', 'uses' => 'MembersController@index']);
           Route::get('/create', ['as' => 'admin.sites.members.create', 'uses' => 'MembersController@create']);
           Route::post('/store', ['as' => 'admin.sites.members.store', 'uses' => 'MembersController@store']);
           Route::get('/bulk', ['as' => 'admin.sites.members.bulk', 'uses' => 'MembersController@bulk']);
           Route::post('/bulk/store', ['as' => 'admin.sites.members.bulk.store', 'uses' => 'MembersController@bulkStore']);
        });
    });
});