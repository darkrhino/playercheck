<?php
Route::group(['prefix' => 'maps', 'namespace' => 'Maps'], function(){
    Route::get('/sites', ['as' => 'maps.sites', 'uses' => 'SitesController@map']);
    Route::get('/stores', ['as' => 'maps.stores', 'uses' => 'StoresController@map']);
});