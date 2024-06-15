<?php

use Controllers\ConfigController;
use Controllers\DashboardController;
use Controllers\LoginController;
use Controllers\PaginasController;
use MVC\Router;

require_once __DIR__ . '/../config/app.php';

$router = new Router;

// Login
$router->get('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Paginas Pulicas
$router->get('/', [PaginasController::class, 'index']);


$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->get('/404', [PaginasController::class, 'error']);

// Administración
$router->get('/admin/dashboard', [DashboardController::class, 'index']);
$router->get('/admin/config', [ConfigController::class, 'config']);
$router->get('/admin/perfil', [ConfigController::class, 'perfil']);


$router->comprobarURL();