<?php

namespace Myth\Auth\Config;

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'About::index');
$routes->get('/guides', 'About::index');
$routes->get('/schedule', 'About::plus');
$routes->get('/coaching', 'Coaching::index');
$routes->get('/payment', 'Coaching::payment');
$routes->add('/addschedule', 'Coaching::create');

$routes->get('/agents', 'Agent::index');
$routes->get('/maps', 'Map::index');
$routes->get('maps/(:num)', 'Map::detail/$1');
$routes->get('agents/(:num)', 'Agent::detail/$1');

$routes->get('payment', 'Coaching::payment');
$routes->post('coaching/topup', 'Coaching::topup');

