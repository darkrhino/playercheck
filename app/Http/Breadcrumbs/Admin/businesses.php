<?php
Breadcrumbs::register('admin.businesses.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Businesses', route('admin.businesses.index'));
});
Breadcrumbs::register('admin.businesses.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.businesses.index');
    $breadcrumbs->push('Create', route('admin.businesses.create'));
});
Breadcrumbs::register('admin.businesses.show', function($breadcrumbs, $business)
{
    $breadcrumbs->parent('admin.businesses.index');
    $breadcrumbs->push($business->name, route('admin.businesses.show', $business->id));
});
Breadcrumbs::register('admin.businesses.edit', function($breadcrumbs, $business)
{
    $breadcrumbs->parent('admin.businesses.show', $business);
    $breadcrumbs->push('Edit', route('admin.businesses.edit', $business->id));
});

include_once 'businesses/sites.php';