<?php

Auth::routes();

Route::group(['namespace' => 'Auth', 'prefix' => 'login/{provider}'], function()
{
    Route::get('/', 'SocialAuthController@redirect');
    Route::get('/callback', 'SocialAuthController@callback');
});

Route::get('/logout', function() {
    Auth::logout();

    return redirect()->intended('/');
});
