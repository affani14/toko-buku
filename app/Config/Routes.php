<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('contact', 'Pages::contact');
$routes->get('homeporto', 'Pages::index'); //rubah untuk ke home sebagai index
$routes->get('product', 'Pages::product');
$routes->get('home', 'Pages::home');
$routes->get('aboutme', 'Pages::aboutme');
$routes->get('portofolio', 'Pages::portofolio');
$routes->get('contactme', 'Pages::contactme');
$routes->setAutoRoute(false);
