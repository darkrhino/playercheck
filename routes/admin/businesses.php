<?php
Route::group(['prefix' => 'businesses', 'namespace' => 'Businesses'], function(){
    Route::get('/', ['as' => 'admin.businesses.index', 'uses' => 'BusinessesController@index']);
    Route::get('/{id}', ['as' => 'admin.businesses.show', 'uses' => 'BusinessesController@show']);
    Route::get('/{id}/edit', ['as' => 'admin.businesses.edit', 'uses' => 'BusinessesController@edit']);
    Route::patch('/{id}/update', ['as' => 'admin.businesses.update', 'uses' => 'BusinessesController@update']);
});