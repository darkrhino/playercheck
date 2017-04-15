<?php
Route::group(['prefix' => 'control', 'namespace' => 'Control'], function(){
   Route::get('/', ['as' => 'control.index', 'uses' => 'ControlController@index']);
});