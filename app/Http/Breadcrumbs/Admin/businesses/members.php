<?php
Breadcrumbs::register('admin.businesses.members.index', function($breadcrumbs, $business)
{
    $breadcrumbs->parent('admin.businesses.show', $business);
    $breadcrumbs->push('Members', route('admin.businesses.members.index', $business->id));
});