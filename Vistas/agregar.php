<?php
    include_once '../Modelo/Conexion.php';
    include_once '../Modelo/Equipos.php';
    include_once '../Modelo/RepositorioEquipos.php';
    Conexion::abrirConexion();
    $conexion = Conexion::obtenerConexion();

    $nombrequipo = '';
    $fechafundacion = '';
    $nombreestadio = '';

    if (isset($_POST['agregar'])) {

        $nombreequipo = $_POST['nombre'];
        $fechafundacion = $_POST['fecha'];
        $nombreestadio = $_POST['estadio'];

        $estadio = "INSERT INTO Estadio(nombre) VALUES ('$nombreestadio')";
        $sentencia = $conexion -> prepare($estadio);
        $estadio_insertado = $sentencia -> execute();

        $sql = "SELECT MAX(idEstadio) as ultimoid FROM Estadio"; 
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> execute();
        $resultado = $sentencia -> fetch();
        $idestadio = $resultado['ultimoid'];

        $equipoInsert = "INSERT INTO EQUIPOS(nombre,fechaFundacion,estadio) 
                        VALUES(:nombre,TO_DATE(:fecha,'%d/%m/%Y'),:estadio)";
        $sentencia = $conexion -> prepare($equipoInsert);

        $sentencia -> bindParam(':nombre',$nombreequipo, PDO::PARAM_STR);
        $sentencia -> bindParam(':fecha',$fechafundacion, PDO::PARAM_STR);
        $sentencia -> bindParam(':estadio',$idestadio, PDO::PARAM_INT);

        $equipo_insertado = $sentencia -> execute(); 

        if(!$equipo_insertado) {
            die("Query Failed.");
        }
        
        $_SESSION['message'] = 'Equipo Agregado';
        $_SESSION['message_type'] = 'warning';
        header('Location: frmEquipos.php');
    }
?>
