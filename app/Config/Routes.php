<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'dashboard::index');
$routes->get('/dashboard/detail_barang/(:num)', 'Dashboard::detail_barang/$1');
$routes->get('/dashboard/checkout/(:num)', 'Checkout::index/$1');

$routes->get('/admin/dashboard', 'DashboardAdmin::index');
$routes->add('/login', 'Login::index');
$routes->add('/register', 'Login::register');

$routes->get('/admin/data_barang', 'DataBarang::index');
$routes->post('/admin/data_barang/tambah', 'DataBarang::tambah');
$routes->add('/admin/data_barang/edit/(:num)', 'DataBarang::edit/$1');
$routes->get('admin/data_barang/delete/(:num)', 'DataBarang::delete/$1');