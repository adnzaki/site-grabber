<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('', 'Apps::index');
$routes->add('/(:any)', 'Apps::index/$1');
