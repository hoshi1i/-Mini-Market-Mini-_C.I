<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'contlogin::login');
$routes->get('/daftar', 'Home::daftar');
$routes->get('/keranjang', 'contkeranjang::keranjang');
$routes->post('/process_register', 'register::insert_register');










