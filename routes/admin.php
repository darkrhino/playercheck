<?php
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['role:staff']], function(){
    include_once 'admin/dashboard.php';
    include_once 'admin/members.php';
    include_once 'admin/requests.php';
    include_once 'admin/businesses.php';
    include_once 'admin/sites.php';
    include_once 'admin/stores.php';
    include_once 'admin/defences.php';
});