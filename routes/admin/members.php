<?php
Route::group(['prefix' => 'members', 'namespace' => 'Members'], function(){
    Route::get('/', ['as' => 'admin.members.index', 'uses' => 'MembersController@index']);
});