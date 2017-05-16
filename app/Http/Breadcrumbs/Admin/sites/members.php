<?php
Breadcrumbs::register('admin.sites.members.index', function($breadcrumbs, $site)
{
    $breadcrumbs->parent('admin.sites.show', $site);
    $breadcrumbs->push('Members', route('admin.sites.members.index', $site->id));
});
Breadcrumbs::register('admin.sites.members.create', function($breadcrumbs, $site)
{
    $breadcrumbs->parent('admin.sites.members.index', $site);
    $breadcrumbs->push('Create', route('admin.sites.members.create', $site->id));
});
Breadcrumbs::register('admin.sites.members.bulk', function($breadcrumbs, $site)
{
    $breadcrumbs->parent('admin.sites.members.index', $site);
    $breadcrumbs->push('Bulk Add', route('admin.sites.members.bulk', $site->id));
});