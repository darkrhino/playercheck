<?php
Route::group(['namespace' => 'Dashboard'], function(){
    Route::get('/dashboard', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
});