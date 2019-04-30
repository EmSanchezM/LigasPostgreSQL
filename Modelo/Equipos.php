<?php
class Equipo{
    private $idEquipos;
    private $nombre;
    private $fechaFundacion;
    private $estadio;

    public function __construct($idEquipos,$nombre,$fechaFundacion,$estadio){
        $this -> $idEquipos = $idEquipos;
        $this -> $nombre = $nombre;
        $this -> $fechaFundacion = $fechaFundacion;
        $this -> $estadio = $estadio;
    }

    public function obtener_id(){
        return $this -> $idEquipos;
    }

    public function obtener_nombre(){
        return $this -> $nombre;
    }

    public function obtener_fechaFundacion(){
        return $this -> $fechaFundacion;
    }

    public function obtener_estadio(){
        return $this -> $estadio;
    }
} 
?>