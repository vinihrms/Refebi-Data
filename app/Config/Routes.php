<?php

use App\Controllers\AppController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/app', [AppController::class, 'index'], ['as' => 'app']);
