<?php
Breadcrumbs::register('admin.businesses.sites.create', function($breadcrumbs, $business)
{
    $breadcrumbs->parent('admin.businesses.show', $business);
    $breadcrumbs->push('Site Creation', route('admin.businesses.sites.create', $business->id));
});
Breadcrumbs::register('admin.businesses.sites.show', function($breadcrumbs, $business, $site)
{
    $breadcrumbs->parent('admin.businesses.sites.index', $business);
    $breadcrumbs->push($site->name, route('admin.businesses.sites.show', [$business->id, $site->id]));
});