<?php
Route::group(['prefix' => 'settings', 'namespace' => 'Settings', 'middleware' => 'auth'], function(){
    Route::get('/', ['as' => 'settings.index', 'uses' => 'SettingsController@index']);
    Route::patch('/update', ['as' => 'settings.update', 'uses' => 'SettingsController@update']);
});