<?php
Route::group(['prefix' => 'control', 'namespace' => 'Control', 'middleware' => 'auth'], function(){
   Route::get('/', ['as' => 'control.dashboard.index', 'uses' => 'ControlController@index']);

   include_once 'control/store.php';
   include_once 'control/site.php';
});