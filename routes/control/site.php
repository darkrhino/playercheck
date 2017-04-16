<?php
Route::group(['prefix' => 'site', 'namespace' => 'Site'], function() {
    Route::get('/create', ['as' => 'control.site.create', 'uses' => 'SiteController@create']);
});