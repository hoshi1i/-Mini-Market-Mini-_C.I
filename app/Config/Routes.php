<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'contlogin::login');
$routes->get('/daftar', 'contdaftar::daftar');
$routes->get('/dashboard', 'contdaftar::index');
$routes->get('/keranjang', 'contkeranjang::keranjang');









