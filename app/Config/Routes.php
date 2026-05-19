<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'PengaduanController::report');

$routes->get('/laporan', 'PengaduanController::report');
$routes->post('/tambah_laporan', 'PengaduanController::add_data');
$routes->get('/tampil_laporan', 'PengaduanController::show_data');