<?php
Route::group(['prefix' => 'requests', 'namespace' => 'Requests'], function(){
    Route::get('/', ['as' => 'admin.requests.index', 'uses' => 'RequestsController@index']);
});