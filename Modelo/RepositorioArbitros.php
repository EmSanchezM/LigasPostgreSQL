<?php
class RepositorioArbitros{

    public static function insertar_Arbitro($conexion, $arbitro){
        $arbitro_insertado = false;
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO Arbitros(experiencia,edad,nombre) 
                        VALUES(:experiencia,:edad,:nombre)";
                $sentencia = $conexion -> prepare($sql);

                $experiencia = $arbitro -> obtener_experiencia();
                $edad = $arbitro -> obtener_edad();
                $nombre = $arbitro -> obtener_nombre();

                $sentencia -> bindParam(':experiencia',$experiencia, PDO::PARAM_STR);
                $sentencia -> bindParam(':edad',$edad, PDO::PARAM_INT);
                $sentencia -> bindParam(':nombre',$nombre, PDO::PARAM_INT);

                $arbitro_insertado = $sentencia -> execute();
                $conexion = null;
            }catch(PDOException $ex){
                print 'Error'. $ex->getMessage();
            }
        }
        return $arbitro_insertado;
    }

    public static function obtener_todos($conexion){
        try{
            $sql = "SELECT * FROM Arbitros";
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