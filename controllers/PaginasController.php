<?php

namespace Controllers;

use MVC\Router;

class PaginasController {

   public static function error(Router $router) {

      $router->renderizar('paginas/error', [
         'titulo' => 'Página no Encontrada',
         'descripcion' => 'como le va'
      ]);

   }

   public static function index(Router $router) {
      
      $router->renderizar('paginas/index', [
         'titulo' => 'Inicio',
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