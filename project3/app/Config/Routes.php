<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

// Authentication Routes
$routes->get('/login', 'Auth::showLogin');
$routes->post('/auth/login', 'Auth::doLogin');
$routes->get('/register', 'Auth::showRegister');
$routes->post('/auth/register', 'Auth::doRegister');
$routes->get('/auth/logout', 'Auth::logout');

// Dashboard
$routes->get('/dashboard', 'Dashboard::index');

// Posts & Comments
$routes->get('/post', 'Post::index');
$routes->post('/comment/store', 'Comment::store');
$routes->get('/post/(:any)', 'Post::viewPost/$1');

$routes->group('admin', function($routes){
	$routes->get('post', 'PostAdmin::index', ['filter' => 'login']);
	$routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
	$routes->add('post/new', 'PostAdmin::create');
	$routes->add('post/(:segment)/edit', 'PostAdmin::edit/$1');
	$routes->get('post/(:segment)/delete', 'PostAdmin::delete/$1');
});