<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  routes admin
$routes->get('/', 'Admin\Dashboard::index');
