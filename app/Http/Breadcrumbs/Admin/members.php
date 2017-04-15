<?php
Breadcrumbs::register('admin.members.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Members', route('admin.members.index'));
});
Breadcrumbs::register('admin.members.show', function($breadcrumbs, $member)
{
    $breadcrumbs->parent('admin.members.index');
    $breadcrumbs->push($member->fullName, route('admin.members.show', $member->id));
});
Breadcrumbs::register('admin.members.edit', function($breadcrumbs, $member)
{
    $breadcrumbs->parent('admin.members.show', $member);
    $breadcrumbs->push('Edit', route('admin.members.edit', $member->id));
});