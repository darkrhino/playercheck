<?php
Breadcrumbs::register('admin.sites.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Game Sites', route('admin.sites.index'));
});
Breadcrumbs::register('admin.sites.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.sites.index');
    $breadcrumbs->push('Site Creation', route('admin.sites.create'));
});
Breadcrumbs::register('admin.sites.show', function($breadcrumbs, $site)
{
    $breadcrumbs->parent('admin.sites.index');
    $breadcrumbs->push($site->name, route('admin.sites.show', $site->id));
});

include_once 'sites/members.php';