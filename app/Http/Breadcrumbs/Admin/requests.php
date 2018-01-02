<?php
Breadcrumbs::register('admin.requests.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Requests', route('admin.requests.index'));
});