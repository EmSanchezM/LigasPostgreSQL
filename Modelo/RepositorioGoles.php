<?php
class RepositorioGoles{

    public static function insertar_Goles($conexion, $goles){
        $goles_insertado = false;
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO Goles(idEquipos,idJugadores,idLiga,numeroGoles) 
                        VALUES(:idequipos,:idjugadores,:liga,:ngoles)";
                $sentencia = $conexion -> prepare($sql);

                $idEquipos = $goles -> obtener_equipo();
                $idJugadores = $goles -> obtener_jugador();
                $idLiga = $goles -> obtener_liga();
                $ngoles = $goles -> obtener_goles();

                $sentencia -> bindParam(':idequipos',$idEquipos, PDO::PARAM_INT);
                $sentencia -> bindParam(':idjugadores',$idJugadores, PDO::PARAM_INT);
                $sentencia -> bindParam(':liga',$idLiga, PDO::PARAM_INT);
                $sentencia -> bindParam(':ngoles',$ngoles, PDO::PARAM_INT);

                $goles_insertado = $sentencia -> execute();
                $conexion = null;
            }catch(PDOException $ex){
                print 'Error'. $ex->getMessage();
            }
        }
        return $goles_insertado;
    }

    public static function obtener_todos($conexion){
        try{
            $sql = "SELECT * FROM V_Goleadores";
            $sentencia = $conexion->prepare($sql);
			$sentencia ->execute();
			$resultado = $sentencia ->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex){
            print 'Error'. $ex->getMessage().'<br>';
        }
        return $resultado;
    }

    public static function obtener_resultados($conexion){
        try {
            $sql = "SELECT * FROM V_RESULTADOS";
            $sentencia = $conexion->prepare($sql);
            $sentencia -> execute();
            $resultado = $sentencia ->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            print 'Error'. $ex->getMessage().'<br>';
        }
        return $resultado;
    }
}
?>