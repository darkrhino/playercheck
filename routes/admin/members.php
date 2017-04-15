<?php
Route::group(['prefix' => 'members', 'namespace' => 'Members'], function(){
    Route::get('/', ['as' => 'admin.members.index', 'uses' => 'MembersController@index']);
    Route::group(['prefix' => '{id}'], function(){
        Route::get('/', ['as' => 'admin.members.show', 'uses' => 'MembersController@show']);
        Route::get('/edit', ['as' => 'admin.members.edit', 'uses' => 'MembersController@edit']);
        Route::patch('/update', ['as' => 'admin.members.update', 'uses' => 'MembersController@update']);
    });

});