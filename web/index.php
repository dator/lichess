<?php

// Try PreKernelCache
require_once __DIR__.'/../src/Bundle/LichessBundle/PreKernelCache.php';

// Symfony2 boot
require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';

use Symfony\Component\HttpFoundation\Request;

// Run application
$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$kernel->handle(Request::createFromGlobals())->send();
