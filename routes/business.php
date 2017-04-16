<?php
Route::group(['namespace' => 'Business', 'prefix' => 'business'], function(){
    Route::get('/business', ['as' => 'business.index', 'uses' => 'BusinessController@index']);
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/create', ['as' => 'business.create', 'uses' => 'BusinessController@create']);
        Route::get('/edit', ['as' => 'business.edit', 'uses' => 'BusinessController@edit']);
        Route::post('/store', ['as' => 'business.store', 'uses' => 'BusinessController@store']);
        Route::group(['prefix' => '{id}'], function() {
            Route::patch('/update', ['as' => 'business.update', 'uses' => 'BusinessController@update']);
        });
    });
});