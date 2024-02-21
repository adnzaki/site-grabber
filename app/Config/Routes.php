<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('', 'Apps::index');

// disable this route before generating expired time
$routes->add('/(:any)', 'Apps::index/$1');

// enable this route before generating expired time
// $routes->add('site/(:any)', 'Apps::index/$1');

$routes->add('get-expired', 'Apps::generateExpiredTime');
