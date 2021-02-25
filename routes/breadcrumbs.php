<?php
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;

Breadcrumbs::register('main', function (Crumbs $crumbs) {
	$crumbs->push('Main', route('main'));
});

Breadcrumbs::register('gallery', function (Crumbs $crumbs) {
	$crumbs->parent('main');
	$crumbs->push('Gallery', route('gallery'));
});
