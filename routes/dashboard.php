<?php
Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth'], function(){
    Route::get('/dashboard', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
});