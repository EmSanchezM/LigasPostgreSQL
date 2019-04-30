<?php
class Arbitros{
    
    private $idarbitro;
    private $experiencia;
    private $edad;
    private $nombre;

    public function __construct($idarbitro,$experiencia,$edad,$nombre){
        $this -> $idarbitro = $idarbitro;
        $this -> $experiencia = $experiencia;
        $this -> $edad = $edad;
        $this -> $nombre = $nombre;
    }

    public function obtener_id(){
        return $this -> $idarbitro;
    }

    public function obtener_experiencia(){
        return $this -> $experiencia;
    }

    public function obtener_edad(){
        return $this -> $edad;
    }

    public function obtener_nombre(){
        return $this -> $nombre;
    }
}
?>