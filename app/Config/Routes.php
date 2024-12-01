<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes -> match(['get', 'post'], '/inserir', 'Home::inserir');
$routes -> match(['get', 'post'], '/gravar', 'Home::gravar');
$routes -> get('/', 'Home::index');