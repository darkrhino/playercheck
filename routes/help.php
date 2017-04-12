<?php
Route::group(['prefix' => 'help', 'namespace' => 'Help'], function(){
    Route::get('/', ['as' => 'help.index', 'uses' => 'HelpController@index']);
});