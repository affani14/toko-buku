<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('contact', 'Pages::contact');
$routes->get('/Faqs', 'Page::faqs');
$routes->get('/Tos', 'Page::tos');
$routes->get('/Biodata', 'Page::biodata');
$routes->get('home', 'Pages::index');

$routes->setAutoRoute(false);
