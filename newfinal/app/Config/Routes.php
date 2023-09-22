<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/homepage', 'Home::homepage');
$routes->get('/homepage/(:any)', 'Home::hm/$1');
$routes->get('/finaltim', 'Home::finaltim'); //products connection
$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->post('/update', 'Home::update');
$routes->get('delete/(:any)', 'Home::delete/$1');
$routes->get('/insert', 'Home::showInsertForm'); 
$routes->post('/insert', 'Home::insert'); 