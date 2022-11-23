<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/', 'Home::loginPage');
$routes->get('detil/(:any)' ,'Home::detil/$1');
$routes->get('beranda', 'Home::index');
$routes->get('logout', 'Login::logout');
$routes->get('/register', 'Register::index');
$routes->get('/formResep', 'Home::form');
$routes->get('/profile', 'Home::profilePage');
$routes->get('/editProfile', 'Home::editProfile');
$routes->get('myResep', 'Home::resepSaya');
$routes->get('update/(:any)', 'Home::updatePage/$1');
$routes->post('search', 'Proses::search');
$routes->post('updateProses', 'Proses::update');
$routes->post('loginAction' ,'Login::process');
$routes->post('formAction' ,'Home::formAction');
$routes->post('formProfile' ,'Home::formProfile');
$routes->post('registerAction' ,'Register::process');
$routes->get('hapusResep/(:any)' ,'Proses::delete/$1');



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
