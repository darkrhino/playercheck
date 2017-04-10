<?php
Route::group(['prefix' => 'businesses', 'namespace' => 'Businesses'], function(){
    Route::get('/', ['as' => 'admin.businesses.index', 'uses' => 'BusinessesController@index']);
});