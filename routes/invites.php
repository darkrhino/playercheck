<?php
Route::group(['prefix' => 'invite', 'namespace' => 'Invites', ], function(){
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', ['as' => 'invite.index', 'uses' => 'InviteController@index']);
        Route::post('/store', ['as' => 'invite.store', 'uses' => 'InviteController@store']);
    });
    Route::get('/accept/{token}', ['as' => 'invite.accept', 'uses' => 'InviteController@accept']);
    Route::get('/accept/create', ['as' => 'invite.creation', 'uses' => 'InviteController@create']);
});
