<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'ctrl_landing_page::index');

$routes->get('/giwan', 'ctrl_giwan::index');
$routes->post('/giwan/init', 'ctrl_giwan::init_filter');
$routes->get('/giwan/(:any)/(:any)', 'ctrl_giwan::show_filter/$1/$2');
$routes->post('/simpan/(:any)/(:any)', 'ctrl_giwan::simpan/$1/$2');

$routes->get('/test', 'ctrl_test::index');

$routes->get('/hanum', 'ctrl_hanum::index');
$routes->post('/hanum/init', 'ctrl_hanum::init_filter');
$routes->get('/hanum/(:any)/(:any)', 'ctrl_hanum::show_filter/$1/$2');
$routes->post('/simpan/(:any)/(:any)', 'ctrl_hanum::simpan/$1/$2');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
