<?php
Route::group(['prefix' => '{id}/store', 'namespace' => 'Store'], function() {
    Route::get('/create', ['as' => 'control.store.create', 'uses' => 'StoreController@create']);
    Route::post('/store', ['as' => 'control.store.store', 'uses' => 'StoreController@store']);
});