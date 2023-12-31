<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::login_student');
// app/config/Routes.php

$routes->setAutoRoute(true);
