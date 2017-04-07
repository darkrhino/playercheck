<?php
Route::group(['namespace' => 'Business'], function(){
    Route::get('/business', ['as' => 'business.index', 'uses' => 'BusinessController@index']);
    Route::group(['prefix' => 'business'], function() {
        Route::get('/create', ['as' => 'business.create', 'uses' => 'BusinessController@create']);
    });
});