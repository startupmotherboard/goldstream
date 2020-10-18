<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


$routes->add('/logout', 'UserPanel::logout');
$routes->get('/logout', 'UserPanel::logout');

$routes->add('/login', 'UserPanel::login');
$routes->get('/login', 'UserPanel::login');

$routes->add('/signup', 'UserPanel::signup');
$routes->get('/signup', 'UserPanel::signup');

$routes->add('/forgot', 'UserPanel::forgot');
$routes->get('/forgot', 'UserPanel::forgot');

$routes->add('/resetPassword/(:any)/(:any)', 'UserPanel::resetPassword/$1/$2');
$routes->get('/resetPassword/(:any)/(:any)', 'UserPanel::resetPassword/$1/$2');

################# customer ################
$routes->add('/customer/dashboard', 'CustomerDash::index');
$routes->get('/customer/dashboard', 'CustomerDash::index');

$routes->add('/customer/profile', 'CustomerDash::profile');
$routes->get('/customer/profile', 'CustomerDash::profile');

$routes->add('/customer/profile/account', 'CustomerDash::profile_account');
$routes->get('/customer/profile/account', 'CustomerDash::profile_account');

$routes->add('/customer/home/new', 'CustomerHome::new_home');
$routes->get('/customer/home/new', 'CustomerHome::new_home');

$routes->add('/customer/messages', 'Messages::new_message');
$routes->get('/customer/messages', 'Messages::new_message');
################# admin ################
$routes->add('/admin/dashboard', 'AdminDash::index');
$routes->get('/admin/dashboard', 'AdminDash::index');

$routes->add('/admin/profile', 'AdminDash::profile');
$routes->get('/admin/profile', 'AdminDash::profile');

$routes->add('/admin/profile/account', 'AdminDash::profile_account');
$routes->get('/admin/profile/account', 'AdminDash::profile_account');

$routes->add('/admin/clients/(:num)', 'AdminClients::get_info/$1');
$routes->get('/admin/clients/(:num)', 'AdminClients::get_info/$1');

$routes->add('/admin/clients/(:num)/home', 'AdminClients::get_home_client/$1');
$routes->get('/admin/clients/(:num)/home', 'AdminClients::get_home_client/$1');

$routes->add('/admin/messages', 'Messages::index');
$routes->get('/admin/messages', 'Messages::index');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
