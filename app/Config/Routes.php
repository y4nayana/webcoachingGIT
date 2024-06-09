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
$routes->add('/addschedule', 'Coaching::create');

$routes->get('/agents', 'Agent::index');



// $routes->get('/contact', 'About::contact');
// $routes->get('/services', 'About::services');
// $routes->get('/services/(:any)', 'About::viewServices/$1');
// $routes->get('/comments', 'Comment::index',['filter'=>'auth']);
// $routes->get('/comments/(:segment)/delete', 'Comment::delete/$1');

// $routes->add('/addcomment', 'Comment::create');
// $routes->add('/comments/(:segment)/edit', 'Comment::edit/$1');

// $routes->get('/login', 'Auth::index');
// $routes->add('/auth', 'Auth::login');
// $routes->get('/logout', 'Auth::logout');