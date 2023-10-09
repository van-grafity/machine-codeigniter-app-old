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
$routes->setDefaultController('Welcome');
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
$routes->get('/', function(){
    return view('landing-page');
});

$routes->get('/home', 'HomeController::index',['as' => 'home']);

$routes->group('api', function($routes){
    $routes->resource('machine', ['controller' => 'MachineAPIController']);
});

// =>default controller
$routes->get('/dashboard', 'DashboardController::index',['as' => 'dashboard']);

// $routes->get('/brand', 'BrandController::index',['as' => 'brand']);
// INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES (NULL, 'administrator', 'Administrator'), (NULL, 'user', 'User');
// get brand using myth auth admin only
$routes->group('brand', ['filter' => 'role:administrator'], function($routes){
    $routes->get('/', 'BrandController::index',['as' => 'brand','filter' => 'permission:user']);
    $routes->get('edit/(:num)', 'BrandController::edit/$1',['as' => 'brand-edit']);
    $routes->get('delete/(:num)', 'BrandController::delete/$1',['as' => 'brand-delete']);
    $routes->get('create', 'BrandController::create',['as' => 'brand-create']);
    $routes->post('store', 'BrandController::store',['as' => 'brand-store']);
    $routes->post('update', 'BrandController::update',['as' => 'brand-update']);
});
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


$routes->get('/machine-type', 'MachineTypeController::index',['as' => 'machine-type']);
$routes->get('/machine-type/edit/(:num)', 'MachineTypeController::edit/$1',['as' => 'machine-type-edit']);
$routes->get('/machine-type/delete/(:num)', 'MachineTypeController::delete/$1',['as' => 'machine-type-delete']);
$routes->get('/machine-type/create', 'MachineTypeController::create',['as' => 'machine-type-create']);
$routes->post('/machine-type/store', 'MachineTypeController::store',['as' => 'machine-type-store']);
$routes->post('/machine-type/update', 'MachineTypeController::update',['as' => 'machine-type-update']);


$routes->get('/location', 'LocationController::index',['as' => 'location']);
$routes->get('/location/edit/(:num)', 'LocationController::edit/$1',['as' => 'location-edit']);
$routes->get('/location/delete/(:num)', 'LocationController::delete/$1',['as' => 'location-delete']);
$routes->get('/location/create', 'LocationController::create',['as' => 'location-create']);
$routes->post('location/store', 'LocationController::store',['as' => 'location-store']);
$routes->post('/location/update', 'LocationController::update',['as' => 'location-update']);


$routes->get('/machine_location', 'MachineLocationController::index',['as' => 'machine_location']);
$routes->get('/machine_location/edit/(:num)', 'MachineLocationController::edit/$1',['as' => 'machine_location-edit']);
$routes->get('/machine_location/delete/(:num)', 'MachineLocationController::delete/$1',['as' => 'machine_location-delete']);
$routes->get('/machine_location/create', 'MachineLocationController::create',['as' => 'machine_location-create']);
$routes->post('/machine_location/store', 'MachineLocationController::store',['as' => 'machine_location-store']);
$routes->post('/machine_location/update', 'MachineLocationController::update',['as' => 'machine_location-update']);


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
