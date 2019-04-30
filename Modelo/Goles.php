<?php
class Goles{
    private $idgoles;
    private $idequipos;
    private $idJugadores;
    private $idLiga;
    private $numeroGoles;
    
    public function __construct($idgoles,$idequipos,$idJugadores,$idLiga,$numeroGoles){
        $this -> $idgoles = $idgoles;
        $this -> $idequipos = $idequipos;
        $this -> $idJugadores = $idJugadores;
        $this -> $idLiga = $idLiga;
        $this -> $numeroGoles = $numeroGoles;
    }

    public function obtener_id(){
        return $this -> $idgoles;
    }

    public function obtener_equipo(){
        return $this -> $idequipos;
    }

    public function obtener_jugador(){
        return $this -> $idJugadores;
    }

    public function obtener_liga(){
        return $this -> $idLiga;
    }

    public function obtener_goles(){
        return $this -> $numeroGoles<
    }
}
?>