<?php
class RepositorioEquipos{

    public static function insertar_Equipo($conexion, $equipo){
        $equipo_insertado = false;
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) 
                        VALUES(:nombre,TO_DATE(:fecha,'%d/%m/%Y'),:estadio)";
                $sentencia = $conexion -> prepare($sql);

                $nombre = $equipo -> obtener_nombre();
                $fecha = $equipo -> obtener_fechaFundacion();
                $estadio = $equipo -> obtener_estadio();

                $sentencia -> bindParam(':nombre',$nombre, PDO::PARAM_STR);
                $sentencia -> bindParam(':fecha',$fecha, PDO::PARAM_STR);
                $sentencia -> bindParam(':estadio',$estadio, PDO::PARAM_INT);

                $equipo_insertado = $sentencia -> execute();
                $conexion = null;
            }catch(PDOException $ex){
                print 'Error'. $ex->getMessage();
            }
        }
        return $equipo_insertado;
    }

    public static function obtener_todos($conexion){
        try{
            $sql = "SELECT * FROM V_EQUIPOS";
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