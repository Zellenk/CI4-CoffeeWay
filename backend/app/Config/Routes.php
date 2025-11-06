<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/shop', 'Users::shop');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');
$routes->post('signup', 'Auth::signup');
