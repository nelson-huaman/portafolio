<?php

namespace Controllers;

use MVC\Router;

class ConfigController {

   public static function config(Router $router) {

      $router->renderizar('admin/configuracion/config', [
         'titulo' => 'Datos de la Empresa'
      ]);

   }

   public static function perfil(Router $router) {

      $router->renderizar('admin/configuracion/perfil', [
         'titulo' => 'Datos del Usuario'
      ]);

   }

}