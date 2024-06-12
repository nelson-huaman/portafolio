<?php

namespace Controllers;

use MVC\Router;

class PaginasController {

   public static function index(Router $router) {

      $dato = [
         'id' => 1,
         'nombre' => 'Nelson'
      ];

      debuguear($dato);

      $router->renderizar('paginas/index', [
         'titulo' => 'Inicio - Home',
         'descripcion' => 'como le va'
      ]);

   }

   public static function contacto(Router $router) {

      $router->renderizar('paginas/contacto', [
         'titulo' => 'Contacto',
         'descripcion' => 'yupiiii'
      ]);

   }
}