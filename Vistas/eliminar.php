<?php
    include_once '../Modelo/Conexion.php';
    Conexion::abrirConexion();
    $conexion = Conexion::obtenerConexion();

    if (isset($_GET['idequipos'])) {

        $idequipo = $_GET['idequipos'];

        $estadio = "DELETE FROM Equipos WHERE idequipos = $idequipo";
        $sentencia = $conexion -> prepare($estadio);
        $equipo_eliminado = $sentencia -> execute();

        if(!$equipo_eliminado) {
            die("Query Failed.");
        }

        $_SESSION['message'] = 'Equipo Eliminado';
        $_SESSION['message_type'] = 'warning';
        header('Location: frmEquipos.php');
    }
?>
