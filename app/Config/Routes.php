<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Secara default diarahkan ke controller Home lalu methodnya index
$routes->get('/', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
//Untuk menambahkan route ke coba































// $routes->get('/users','Admin\Users::index');
// $routes->get('/coba', 'Coba::index');
// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');

// $routes->get('/coba', 'Coba::index'); //Untuk mengaksesnya harus pastikan ditambahkan dulu routenya
// $routes->get('/coba/about', 'Coba::about'); //sebaiknya gunakan get untuk menampilkan datanya agar aman