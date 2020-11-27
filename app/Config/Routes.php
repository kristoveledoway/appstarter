<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');

// crud data user
$routes->get('/data_user', 'Data_User::index');
$routes->get('/data_user/tambah', 'Data_User::tambah');
$routes->add('/data_user/tambah', 'Data_User::tambah');
$routes->get('/data_user/edit/(:num)', 'Data_User::edit/$1');
$routes->add('/data_user/edit/(:num)', 'Data_User::edit/$1');
$routes->add('/data_user/delete/(:num)', 'Data_User::delete/$1');

//crud data diri
$routes->get('/data_diri', 'Data_Diri::index');
$routes->get('/data_diri/tambah', 'Data_Diri::tambah');
$routes->add('/data_diri/tambah', 'Data_Diri::tambah');
$routes->get('/data_diri/detail/(:num)', 'Data_Diri::detail/$1');
$routes->get('/data_diri/edit/(:num)', 'Data_Diri::edit/$1');
$routes->add('/data_diri/edit/(:num)', 'Data_Diri::edit/$1');
$routes->add('/data_diri/delete/(:num)', 'Data_Diri::delete/$1');

//crud data surat masuk
$routes->get('/data_surat_masuk', 'Data_Surat_Masuk::index');
$routes->get('/data_surat_masuk/tambah', 'Data_Surat_Masuk::tambah');
$routes->add('/data_surat_masuk/tambah', 'Data_Surat_Masuk::tambah');
$routes->get('/data_surat_masuk/download/(:num)', 'Data_Surat_Masuk::download/$1');
$routes->get('/data_surat_masuk/edit/(:num)', 'Data_Surat_Masuk::edit/$1');
$routes->add('/data_surat_masuk/edit/(:num)', 'Data_Surat_Masuk::edit/$1');
$routes->add('/data_surat_masuk/delete/(:num)', 'Data_Surat_Masuk::delete/$1');

// crud data surat keluar
$routes->get('/data_surat_keluar', 'Data_Surat_Keluar::index');
$routes->get('/data_surat_keluar/tambah', 'Data_Surat_Keluar::tambah');
$routes->add('/data_surat_keluar/tambah', 'Data_Surat_Keluar::tambah');
$routes->get('/data_surat_keluar/detail/(:num)', 'Data_Surat_Keluar::detail/$1');
$routes->get('/data_surat_keluar/edit/(:num)', 'Data_Surat_Keluar::edit/$1');
$routes->add('/data_surat_keluar/edit/(:num)', 'Data_Surat_Keluar::edit/$1');
$routes->add('/data_surat_keluar/delete/(:num)', 'Data_Surat_Keluar::delete/$1');

// crud data kas masuk
$routes->get('/data_kas_masuk', 'Data_Kas_Masuk::index');
$routes->get('/data_kas_masuk/tambah', 'Data_Kas_Masuk::tambah');
$routes->add('/data_kas_masuk/tambah', 'Data_Kas_Masuk::tambah');
$routes->get('/data_kas_masuk/detail/(:num)', 'Data_Kas_Masuk::detail/$1');
$routes->get('/data_kas_masuk/edit/(:num)', 'Data_Kas_Masuk::edit/$1');
$routes->add('/data_kas_masuk/edit/(:num)', 'Data_Kas_Masuk::edit/$1');
$routes->add('/data_kas_masuk/delete/(:num)', 'Data_Kas_Masuk::delete/$1');

// crud data kas keluar
$routes->get('/data_kas_keluar', 'Data_Kas_Keluar::index');
$routes->get('/data_kas_keluar/tambah', 'Data_Kas_Keluar::tambah');
$routes->add('/data_kas_keluar/tambah', 'Data_Kas_Keluar::tambah');
$routes->get('/data_kas_keluar/detail/(:num)', 'Data_Kas_Keluar::detail/$1');
$routes->get('/data_kas_keluar/edit/(:num)', 'Data_Kas_Keluar::edit/$1');
$routes->add('/data_kas_keluar/edit/(:num)', 'Data_Kas_Keluar::edit/$1');
$routes->add('/data_kas_keluar/delete/(:num)', 'Data_Kas_Keluar::delete/$1');

/**
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
