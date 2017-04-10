<?php
Route::group(['prefix' => 'requests', 'namespace' => 'Requests', 'middleware' => 'auth'], function(){
    Route::get('/', ['as' => 'requests.index', 'uses' => 'RequestController@index']);
    Route::get('/{id}', ['as' => 'requests.show', 'uses' => 'RequestController@show']);
});