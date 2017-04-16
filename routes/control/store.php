<?php
Route::group(['prefix' => '{id}/store', 'namespace' => 'Store', 'middleware' => ['auth', 'b.member']], function() {
    Route::get('/create', ['as' => 'control.store.create', 'uses' => 'StoreController@create']);
    Route::get('/{slug}', ['as' => 'control.store.show', 'uses' => 'StoreController@show']);
    Route::post('/store', ['as' => 'control.store.store', 'uses' => 'StoreController@store']);
});