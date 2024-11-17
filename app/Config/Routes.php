<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('register', 'Home::Register');
$routes->post('register', 'Home::RegisterSubmit');
$routes->get('post/(:any)', 'Post::ShowPost/$1');




//admin

$routes->get('admin', 'Admin::Admin');
