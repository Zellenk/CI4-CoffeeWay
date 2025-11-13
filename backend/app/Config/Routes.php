<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/shop', 'Users::shop');


$routes->get('/login', 'Auth::showLoginPage');
$routes->post('/login', 'Auth::login');

$routes->post('/logout', 'Auth::logout');
$routes->get('/signup', 'Auth::showSignupPage');
$routes->post('/signup', 'Auth::signup');
$routes->post('signup', 'Auth::store');

$routes->get('/employee/dashboard', 'Employee::dashboard');
$routes->get('/employee/accounts', 'Employee::accounts');
$routes->get('/employee/inquiries', 'Employee::inquiries');
$routes->get('/employee/services', 'Employee::services');
