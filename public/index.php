<?php

use Controllers\DashboardController;
use Controllers\PaginasController;
use MVC\Router;

require_once __DIR__ . '/../config/app.php';

$router = new Router;

// Paginas Pulicas
$router->get('/', [PaginasController::class, 'index']);


$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->get('/404', [PaginasController::class, 'error']);

// Administración
$router->get('/admin/dashboard', [DashboardController::class, 'index']);


$router->comprobarURL();