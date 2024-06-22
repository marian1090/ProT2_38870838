<?php

namespace Config;

use App\Controllers\Dashboard;

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

//rutas principales
$routes->get('/principal', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/acerca', 'Home::acerca');
// Ruta del logueo 
$routes->get('/login', 'LoginController::index');
// Ruta del registro de usuario
$routes->get('/registrarse', 'UsuarioController::create');