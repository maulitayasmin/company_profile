<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'SliderController::index');
// $routes->group('kontak', function ($routes) {
//     $routes->get('/', 'KontakController::index'); 
// });

// $routes->group('profil', function ($routes) {
//     $routes->get('/', 'ProfilController::index'); 
// });

$routes->group('id', function ($routes) {
    $routes->get('/', 'SliderController::index');
    $routes->get('profil', 'ProfilController::index');
    $routes->get('kontak', 'KontakController::index');
});

$routes->group('en', function ($routes) {
    $routes->get('/', 'SliderController::index');
    $routes->get('profile', 'ProfilController::index');
    $routes->get('contact', 'KontakController::index');
});
