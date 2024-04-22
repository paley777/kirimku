<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/delivery', 'Delivery::index');
$routes->get('/delivery/(:segment)/detail', 'Delivery::detail/$1');
$routes->add('/delivery/new', 'Delivery::create');
$routes->get('/report', 'Report::index');
