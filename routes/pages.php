<?php
Route::group(['namespace' => 'Pages'], function(){
   Route::get('/', ['as' => 'pages.home', 'uses' => 'PageController@index']);
   Route::get('/features', ['as' => 'pages.features', 'uses' => 'PageController@features']);
   Route::get('/pricing', ['as' => 'pages.pricing', 'uses' => 'PageController@pricing']);
   Route::get('/business', ['as' => 'pages.business', 'uses' => 'PageController@business']);
   Route::get('/explore', ['as' => 'pages.explore', 'uses' => 'PageController@explore']);
});