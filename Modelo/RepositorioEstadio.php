<?php
class RepositorioEstadio{
    public static function insertar_Estadio($conexion, $estadio){
        $estadio_insertado = false;
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO Estadio(nombre) VALUES(:nombre)";
                $sentencia = $conexion -> prepare($sql);

                $nombre = $estadio -> obtener_nombre();
                
                $sentencia -> bindParam(':nombre',$nombre, PDO::PARAM_STR);
                
                $estadio_insertado = $sentencia -> execute();
                $conexion = null;
            }catch(PDOException $ex){
                print 'Error'. $ex->getMessage();
            }
        }
        return $estadio_insertado;
    }

    public static function obtener_todos($conexion){
        try{
            $sql = "SELECT * FROM Estadios";
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