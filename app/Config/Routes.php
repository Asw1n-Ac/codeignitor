<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/product', 'Shop::product');
$routes->get('/mobile', 'Shop::mobile');
$routes->get('/contactus', 'Contactus::index');




