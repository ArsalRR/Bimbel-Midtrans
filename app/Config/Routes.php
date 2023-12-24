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
 $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'User::index');
$routes->group('Rangking', ['filter' => 'role:administrator'], function ($routes) {
    $routes->get('/', 'Rangking::index');
    $routes->get('formemail', 'Rangking::formemail');
    $routes->get('grafik', 'Rangking::grafik');
    $routes->get('exel', 'Rangking::exel');
});
$routes->group('TaskControll', ['filter' => 'role:administrator'], function ($routes) {
    $routes->get('/', 'TaskControll::index');
    $routes->get('create', 'TaskControll::create');
    $routes->get('formedit/(:segment)', 'TaskControll::formedit/$1'); 
    $routes->get('/','TaskControll::Penilaian');
});
$routes->group('User', ['filter' => 'role:user'], function ($routes) {
    $routes->get('/', 'TestiController::index');
    $routes->get('/', 'User::Tagihan');
   


 
});
$routes->group('TestiController', ['filter' => 'role:user'], function ($routes) {
    $routes->get('/', 'TestiController::index');
    $routes->get('/', 'User::Tagihan');
    $routes->get('/', 'TestiController::Create');

   


 
});



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
