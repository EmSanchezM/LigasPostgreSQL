<?php
    include_once '../Modelo/Conexion.php';
    include_once '../Modelo/Equipos.php';
    include_once '../Modelo/RepositorioEquipos.php';
    Conexion::abrirConexion();
    $conexion = Conexion::obtenerConexion();

    $idtemporada = -1;
    $idliga = -1;
    $equipolocal = '';
    $equipovisitante = '';
    $fecha = '';

    if (isset($_POST['agregar'])) {

        $idtemporada = $_POST['temporadas'];
        $idliga = $_POST['ligas'];
        $equipolocal = $_POST['local'];
        $equipovisitante = $_POST['visitante'];
        $fecha = $_POST['fecha'];
        $resultado = $_POST['resultado'];

        $sql = "SELECT idjornada FROM Jornadas WHERE temporadafk = :temporada  AND ligafk = :liga "; 
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> bindParam(':temporada',$idtemporada, PDO::PARAM_INT);
        $sentencia -> bindParam(':liga',$idliga, PDO::PARAM_INT);
        $sentencia -> execute();
        $resultado = $sentencia -> fetch();
        $idjornada = $resultado['idjornada'];

        $sql = "SELECT idequipos FROM Equipos WHERE nombre = :nombre"; 
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> bindParam(':nombre',$equipolocal, PDO::PARAM_STR);
        $sentencia -> execute();
        $resultado = $sentencia -> fetch();
        $idlocal = $resultado['idequipos'];

        $sql = "SELECT idequipos FROM Equipos WHERE nombre = :nombre"; 
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> bindParam(':nombre',$equipovisitante, PDO::PARAM_STR);
        $sentencia -> execute();
        $resultado = $sentencia -> fetch();
        $idvisita = $resultado['idequipos'];

        $partido = "INSERT INTO Partidos(jornadafk,equipolocal,equipovisitante,fechapartido) VALUES (:jornada,:elocal,:visita,TO_DATE(:fecha'%d/%m/%Y'))";
        $sentencia = $conexion -> prepare($partido);
        $sentencia -> bindParam(':jornada',$nombreequipo, PDO::PARAM_INT);
        $sentencia -> bindParam(':elocal',$idlocal, PDO::PARAM_INT);
        $sentencia -> bindParam(':visita',$idvisita, PDO::PARAM_INT);
        $sentencia -> bindParam(':fecha',$fecha, PDO::PARAM_STR);
        $partido_insertado = $sentencia -> execute();

        $sql = "SELECT MAX(idpartidos) FROM Partidos";
        $sentencia = $conexion ->prepare($sql);
        $sentencia ->execute();
        $resultado = $sentencia -> fetch();
        $idpartido = $resultado['idpartidos'];

        $resultadoPartido = "INSERT INTO Resultado(partidofk,resultado) 
                             VALUES(:partido,:resultado)";
        $sentencia = $conexion -> prepare($resultadoPartido);
        $sentencia -> bindParam(':partido',$idpartido, PDO::PARAM_INT);
        $sentencia -> bindParam(':resultado',$resultado, PDO::PARAM_STR);
        
        $resultado_insertado = $sentencia -> execute(); 

        if(!$resultado_insertado) {
            die("Query Failed.");
        }
        
        $_SESSION['message'] = 'Resultado Agregado';
        $_SESSION['message_type'] = 'warning';
        header('Location: frmCalendario.php');
    }
?>
