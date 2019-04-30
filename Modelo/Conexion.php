<?php
class Conexion{
  private static $conexion;
  public static function abrirConexion(){
    if(!isset(self::$conexion)){
      try {
        $usuario = 'postgres';
        $contraseña = 'post1234';
        $charset = 'utf8';
        $dsn = 'pgsql:host=localhost;port=5432;dbname=sistemaLigas';
        self::$conexion = new PDO($dsn,$usuario,$contraseña);
        self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
          echo 'Ha surgido un error '.$e->getMessage() .'<br>';
          die();
      }
    }
  }

  public static function cerrarConexion(){
    if(isset(self::$conexion)){
      self::$conexion = null;
    }
  }
  public static function obtenerConexion(){
    session_start();
    return self::$conexion;
  }

}

 ?>