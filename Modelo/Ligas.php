<?php
class Liga{
    private $idliga;
    private $nombre;
    private $calificacion;
    private $idtipoequipo;
    private $idequipo;

    public function __construct($idliga,$nombre,$calificacion,$idtipoequipo,$idequipo){
        $this -> $idliga = $idliga;
        $this -> $nombre = $nombre;
        $this -> $calificacion = $calificacion;
        $this -> $idtipoequipo = $idtipoequipo;
        $this -> $idequipo = $idequipo;
    }

    public function obtener_liga(){
        return $this -> $idliga;
    }

    public function obtener_nombre(){
        return $this -> $nombre;
    }

    public function obtener_calificacion(){
        return $this -> $calificacion;
    }

    public function obtener_tipoequipo(){
        return $this -> $idtipoequipo;
    }

    public function obtener_equipo(){
        return $this -> $idequipo;
    }
}
?>