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

$routes->match(['get', 'post'], 'register', 'User::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'User::login', ['filter' => 'noauth']);

$routes->get('dashboard', 'Dashboard::index', ['filter' => 'adminauth']);

$routes->get('admin/dashboard', 'Dashboard::index', ['filter' => 'adminauth']);
$routes->get('admin/manage_users', 'ManageUsers::index', ['filter' => 'adminauth']);
$routes->get('admin/manage_user_workouts', 'ManageUserWorkouts::index', ['filter' => 'adminauth']);
$routes->get('admin/manage_quiz', 'ManageQuiz::index', ['filter' => 'adminauth']);
$routes->get('admin/manage_workouts', 'ManageWorkouts::index', ['filter' => 'adminauth']);

$routes->get('profile', 'User::profile', ['filter' => 'auth']);
$routes->get('favorites', 'Favorites::index', ['filter' => 'auth']);

$routes->get('public/Workouts/w_all_exercises/add/(:num)', 'W_all_exercises::add/$1', ['filter' => 'auth']);
$routes->get('public/Workouts/w_all_exercises/remove/(:num)', 'W_all_exercises::remove/$1', ['filter' => 'auth']);

$routes->get('admin/manage_users/delete/(:num)', 'ManageUsers::delete/$1', ['filter' => 'adminauth']);
$routes->get('admin/manage_user_workouts/delete/(:num)', 'ManageUserWorkouts::delete/$1', ['filter' => 'adminauth']);
$routes->get('admin/manage_quiz/delete/(:num)', 'ManageQuiz::delete/$1', ['filter' => 'adminauth']);
$routes->get('admin/manage_workouts/delete/(:num)', 'ManageWorkouts::delete/$1', ['filter' => 'adminauth']);

$routes->get('profile/add', 'Profile::add', ['filter' => 'auth']);

$routes->get('logout', 'User::logout');

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
