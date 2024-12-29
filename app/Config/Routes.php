<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('register', 'Home::Register');
$routes->post('register', 'Home::RegisterSubmit');
$routes->get('job-post/(:any)', 'Post::ShowPost/$1');




//admin

$routes->get('admin', 'Admin::Admin');
$routes->get('admin/jobpostcreate', 'Admin::AdminJobPostCreate');
$routes->post('admin/jobpostsubmit', 'Admin::AdminJobPostCreateSubmit');

