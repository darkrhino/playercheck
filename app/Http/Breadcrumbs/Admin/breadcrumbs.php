<?php
Breadcrumbs::register('admin.dashboard.index', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('admin.dashboard.index'));
});


include_once 'members.php';
include_once 'businesses.php';
include_once 'sites.php';