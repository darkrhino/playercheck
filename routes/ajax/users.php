<?php
Route::group(['prefix' => 'users', 'namespace' => 'Users'], function(){
   Route::group(['middleware' => 'auth'], function(){
      Route::get('/request', 'RequestController@index')->name('ajax.users.request.index');
      Route::post('/request', 'RequestController@store')->name('ajax.users.request.store');
      Route::post('/test', 'RequestController@test')->name('ajax.users.request.test');
   });
});