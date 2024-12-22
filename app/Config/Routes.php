<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');



$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/create_konser', 'Admin::create_konser');
$routes->post('/admin/store_konser', 'Admin::store_konser');
$routes->get('/admin/edit_konser/(:segment)', 'Admin::edit_konser/$1');
$routes->post('/admin/update_konser/(:segment)', 'Admin::update_konser/$1');
$routes->post('/admin/delete_konser/(:segment)', 'Admin::delete_konser/$1');


$routes->get('/artis', 'Artis::index');
$routes->get('/artis/create', 'Artis::create');
$routes->post('/artis/store', 'Artis::store');
$routes->get('/artis/edit/(:segment)', 'Artis::edit/$1');
$routes->post('/artis/update/(:segment)', 'Artis::update/$1');
$routes->post('/artis/delete/(:segment)', 'Artis::delete/$1');


$routes->get('/lokasi', 'Lokasi::index');
$routes->get('/lokasi/create', 'Lokasi::create');
$routes->post('/lokasi/store', 'Lokasi::store');
$routes->get('/lokasi/edit/(:segment)', 'Lokasi::edit/$1');
$routes->post('/lokasi/update/(:segment)', 'Lokasi::update/$1');
$routes->post('/lokasi/delete/(:segment)', 'Lokasi::delete/$1');
