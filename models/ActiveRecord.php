<?php

namespace Model;

class ActiveRecord {

   protected static $db;
   protected static $tabla = '';
   protected static $columnaDB = [];
   protected static $alertas = [];

   public static function setDB($database) {
      self::$db = $database;
   }

}