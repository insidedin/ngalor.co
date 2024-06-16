<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Page::home');
$routes->get('/login', 'Page::login');
$routes->get('/konten', 'Page::konten');
$routes->get('/pesan', 'Page::pesan');

$routes->get('/pageadmin', 'Admin::admin');
$routes->get('/page/pesan/(:num)', 'Page::pesan/$1');
$routes->get('/pesanan', 'Page::pesan');
$routes->post('/page/storePesanan', 'Page::storePesanan');
$routes->get('/pageadmin/event/pesanan', 'Admin\Event::pesanan');


$routes->group('pageadmin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('users/indexuser', 'Users::indexuser');
    $routes->get('users/create', 'Users::create');
    $routes->post('users/store', 'Users::store');
    $routes->get('users/edit/(:num)', 'Users::edit/$1');
    $routes->post('users/update/(:num)', 'Users::update/$1');
    $routes->get('users/delete/(:num)', 'Users::delete/$1');
});

$routes->group('pageadmin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('event', 'Event::index');
    $routes->get('event/index', 'Event::index');
    $routes->get('event/create', 'Event::create');
    $routes->post('event/store', 'Event::store');
    $routes->get('event/edit/(:num)', 'Event::edit/$1');
    $routes->post('event/update/(:num)', 'Event::update/$1');
    $routes->get('event/delete/(:num)', 'Event::delete/$1');
});


$routes->get('/login', 'Admin\AuthController::login');
$routes->post('/login', 'Admin\AuthController::loginSubmit');
$routes->get('/logout', 'Admin\AuthController::logout');
$routes->get('/login', 'Admin\AuthController::login');
$routes->post('/loginSubmit', 'Admin\AuthController::loginSubmit');

