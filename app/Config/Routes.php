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
$routes->get('/', 'Home::index');

// =>default controller
$routes->get('/dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/brand', 'BrandController::index',['as' => 'brand']);
$routes->get('/brand/edit/(:num)', 'BrandController::edit/$1',['as' => 'brand-edit']);
$routes->get('/brand/delete/(:num)', 'BrandController::delete/$1',['as' => 'brand-delete']);
$routes->get('/brand/create', 'BrandController::create',['as' => 'brand-create']);
$routes->post('/brand/store', 'BrandController::store',['as' => 'brand-store']);
$routes->post('/brand/update', 'BrandController::update',['as' => 'brand-update']);


$routes->get('/machine', 'MachineController::index',['as' => 'machine']);
$routes->get('/machine/edit/(:num)', 'MachineController::edit/$1',['as' => 'machine-edit']);
$routes->get('/machine/delete/(:num)', 'MachineController::delete/$1',['as' => 'machine-delete']);
$routes->get('/machine/create', 'MachineController::create',['as' => 'machine-create']);
$routes->post('/machine/store', 'MachineController::store',['as' => 'machine-store']);
$routes->post('/machine/update', 'MachineController::update',['as' => 'machine-update']);


$routes->get('/machine_type', 'Machine_TypeController::index',['as' => 'machine_type']);
$routes->get('/machine_type/edit/(:num)', 'Machine_TypeController::edit/$1',['as' => 'machine_type-edit']);
$routes->get('/machine_type/delete/(:num)', 'Machine_TypeController::delete/$1',['as' => 'machine_type-delete']);
$routes->get('/machine_type/create', 'Machine_TypeController::create',['as' => 'machine_type-create']);
$routes->post('/machine_type/store', 'Machine_TypeController::store',['as' => 'machine_type-store']);
$routes->post('/machine_type/update', 'Machine_TypeController::update',['as' => 'machine_type-update']);


$routes->get('/location', 'LocationController::index',['as' => 'location']);
$routes->get('/location/edit/(:num)', 'LocationController::edit/$1',['as' => 'location-edit']);
$routes->get('/location/delete/(:num)', 'LocationController::delete/$1',['as' => 'location-delete']);
$routes->get('/location/create', 'LocationController::create',['as' => 'location-create']);
$routes->post('location/store', 'LocationController::store',['as' => 'location-store']);
$routes->post('/location/update', 'LocationController::update',['as' => 'location-update']);


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
