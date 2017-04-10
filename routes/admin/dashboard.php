<?php
Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function(){
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'DashboardController@index']);
});