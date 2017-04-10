<?php
Route::group(['namespace' => 'Business', 'prefix' => 'business'], function(){
    Route::get('/business', ['as' => 'business.index', 'uses' => 'BusinessController@index']);
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/create', ['as' => 'business.create', 'uses' => 'BusinessController@create']);
    });
});