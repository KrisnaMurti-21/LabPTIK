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
// $routes->set404Override();
$routes->set404Override(function () {
    return view('error404');
});
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/lab/rpl', 'Lab::rpl');
$routes->get('/lab/mulmed', 'Lab::mulmed');
$routes->get('/lab/tkj', 'Lab::tkj');
$routes->get('/lab/fasilitas_tkj', 'Lab::fac_tkj');
$routes->get('/lab/fasilitas_rpl', 'Lab::fac_rpl');
$routes->get('/lab/fasilitas_mulmed', 'Lab::fac_mulmed');
$routes->get('/coba', 'Pages::coba');
$routes->get('/lab/log_login', 'Lab::l_login');
$routes->get('/lab/l_register', 'Lab::l_register');
$routes->get('/lab/l_contact', 'Contact::l_contact');

//Admin Page
$routes->get('/admin', 'Admin::index/', ['filter' => 'auth-admin']);
$routes->get('/admin/home', 'Admin::index/', ['filter' => 'auth-admin']);

$routes->get('/admin/hal_lab', 'Admin::hal_lab', ['filter' => 'auth-admin']);
$routes->get('/admin/hal_lab/(:any)', 'Admin::hal_lab/$1', ['filter' => 'auth-admin']);
$routes->post('/admin/hal_lab/(:any)', 'Admin::hal_lab/$1', ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/simpanLab", "Admin::simpanLab", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/ubahLab", "Admin::ubahLab", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/hapusLab", "Admin::hapusLab", ['filter' => 'auth-admin']);

$routes->get('/admin/hal_fasilitas', 'Admin::hal_fasilitas', ['filter' => 'auth-admin']);
$routes->get('/admin/hal_fasilitas/(:any)', 'Admin::hal_fasilitas/$1', ['filter' => 'auth-admin']);
$routes->post('/admin/hal_fasilitas/(:any)', 'Admin::hal_fasilitas/$1', ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/simpanFasilitas", "Admin::simpanFasilitas", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/ubahFasilitas", "Admin::ubahFasilitas", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/hapusFasilitas", "Admin::hapusFasilitas", ['filter' => 'auth-admin']);

$routes->get('/admin/reservasi', 'Admin::reservasi', ['filter' => 'auth-admin']);
$routes->get('/admin/selesaikan', 'Admin::reservasi', ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/selesaikan", "Admin::selesaikan", ['filter' => 'auth-admin']);

$routes->get('/admin/user', 'Admin::user', ['filter' => 'auth-admin']);
$routes->get('/admin/verif', 'Admin::verif', ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/verif", "Admin::verif", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/simpanUser", "Admin::simpanUser", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/ubahUser", "Admin::ubahUser", ['filter' => 'auth-admin']);
$routes->match(["get", "post"], "/admin/hapusUser", "Admin::hapusUser", ['filter' => 'auth-admin']);

// halaman login
$routes->get('/Auth/Login', 'Auth::index', ['filter' => 'NoAuth']);
$routes->post('/Auth/Save', 'Auth::registerUser', ['filter' => 'NoAuth']);
$routes->get('/Auth/Registration', 'Auth::registration', ['filter' => 'NoAuth']);
$routes->post('/Auth/Login', 'Auth::login', ['filter' => 'NoAuth']);
$routes->get('/auth/metu', 'Auth::metu');

// contactus
$routes->post('/Contact/Save', 'Contact::contactUser');
$routes->get('/Auth/Index', 'Auth::Index');

// halaman reservasi
$routes->get('/reservasi', 'Lab::reservasi');
$routes->post('/reserved/save', 'Lab::reservedLab');
$routes->get('/bukti_regis', 'Lab::bukti_regis');



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
