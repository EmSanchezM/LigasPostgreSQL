<?php
class RepositorioLigas{

    public static function insertar_Goles($conexion, $goles){
        $goles_insertado = false;
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO Liga(idLiga,nombre,calificacion,idtipoefk,idequiposfk) 
                        VALUES(:idliga,:nombre, :calificacion, :tipoeq, :equipo)";
                $sentencia = $conexion -> prepare($sql);

                $idEquipos = $goles -> obtener_equipo();
                $idJugadores = $goles -> obtener_jugador();
                $idLiga = $goles -> obtener_liga();
                $ngoles = $goles -> obtener_goles();
                $sentencia -> bindParam(':nombre',$nombre, PDO::PARAM_STR);
                
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
            $sql = "SELECT * FROM V_Ligas";
            $sentencia = $conexion->prepare($sql);
			$sentencia ->execute();
			$resultado = $sentencia ->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex){
            print 'Error'. $ex->getMessage().'<br>';
        }
        return $resultado;
    }
}
?>