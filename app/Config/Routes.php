<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::index', ['filter' => 'login']);
$routes->get('/dosen', 'Dosen::sync', ['filter' => 'login']);
$routes->post('/matakuliah', 'matakuliah::post', ['filter' => 'login']);
$routes->get('/perguruantinggi', 'PerguruanTinggi::index', ['filter' => 'login']);
$routes->get('/matakuliah', 'Matakuliah::index', ['filter' => 'login']);

$routes->post('api/v1/authentication', 'Ws/V1/Auth::login', ['filter' => 'login']); //login Mahasiswa Skripsi
$routes->get('api/v1/check', 'Ws/V1/Auth::details', ['filter' => 'login']);
$routes->get('api/v1/mahasiswa', 'Ws/V1/Mahasiswa::read', ['filter' => 'login']); //tampil mahasiswa
$routes->get('api/v1/biodata', 'Ws/V1/Biodata::read', ['filter' => 'login']); //tampil mahasiswa
$routes->get('api/v1/prodi', 'Ws/V1/Prodi::read', ['filter' => 'login']); //tampil mahasiswa
$routes->get('api/v1/mahasiswaskripsi', 'Ws/V1/MahasiswaSkripsi::read', ['filter' => 'login']);
$routes->get('api/v1/mahasiswaskripsii', 'Ws/V1/MahasiswaSkripsi::add', ['filter' => 'login']);
$routes->get('api/v1/programstudi', 'Ws/V1/ProgramStudi::read', ['filter' => 'login']);
$routes->get('api/v1/pass', 'Ws/V1/MahasiswaSkripsi::pass', ['filter' => 'login']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}