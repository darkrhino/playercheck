<?php
Breadcrumbs::register('admin.stores.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Retail Stores', route('admin.stores.index'));
});
Breadcrumbs::register('admin.stores.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.stores.index');
    $breadcrumbs->push('Store Creation', route('admin.stores.create'));
});
Breadcrumbs::register('admin.stores.show', function($breadcrumbs, $store)
{
    $breadcrumbs->parent('admin.stores.index');
    $breadcrumbs->push($store->name, route('admin.stores.show', $store->id));
});