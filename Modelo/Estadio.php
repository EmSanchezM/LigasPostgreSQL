<?php

class Estadio{
    private $idEstadio;
    private $nombre;

    public function __construct($idEstadio,$nombre){
        $this -> $idEstadio = $idEstadio;
        $this -> $nombre = $nombre;
    }
    
    public function obtenerId(){
        return $this -> $idEstadio;
    }
    
    public function obtenerNombre(){
        return $this -> $nombre;
    }
    

}
?>