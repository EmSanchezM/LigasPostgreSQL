<?php
    include_once '../Modelo/Conexion.php';
    include_once '../Modelo/RepositorioEquipos.php';
    
    Conexion::abrirConexion();
    $conexion = Conexion::obtenerConexion();

    $nombrequipo = '';
    $nombreestadio = '';

    if(isset($_GET['idequipos'])){
        $idequipos = $_GET['idequipos'];
        $sql = "SELECT * FROM V_EQUIPOS WHERE idequipos=:idequipos";
        $sentencia = $conexion->prepare($sql);
        $sentencia ->bindParam(':idequipos',$idequipos, PDO::PARAM_INT);
		    $sentencia ->execute();
        $rowcount = $sentencia ->fetchAll(PDO::FETCH_ASSOC);
        if($rowcount == 1){
            $nombrequipo = $rowcount['nombreequipo'];
            $nombreestadio = $rowcount['nombreestadio'];
        }
    }

    if (isset($_POST['update'])) {

        $idequipos = $_GET['idequipos'];
        $nombreequipo = $_POST['nombre'];
        $nombreestadio = $_POST['estadio'];

        $sqlestadio = "SELECT idestadio FROM Estadio WHERE nombre ='$nombreestadio'";
        $sentencia = $conexion->prepare($sqlestadio);
        $sentencia -> execute(); 
        $resultado = $sentencia -> fetch();
        $idestadio = $resultado['idestadio'];

        if($idestadio == NULL){
          $sqlin = "INSERT INTO Estadio(nombre) VALUES ('$nombreestadio')";
          $sentencia = $conexion->prepare($sqlin);
          $sentencia -> execute();

          $sqlid = "SELECT MAX(idestadio) as idestadio FROM Estadio";
          $sentencia = $conexion->prepare($sqlid);
          $sentencia -> execute(); 
          $resultado = $sentencia -> fetch();
          $idestadio = $resultado['idestadio'];

          $sql = "UPDATE Equipos set nombre = '$nombreequipo', estadio = '$idestadio' WHERE idequipos=$idequipos";
          $sentencia = $conexion->prepare($sql);
          $equipo_actualizado = $sentencia -> execute(); 

          if(!$equipo_actualizado){
            die('Query Failed.');
          }else{
            $_SESSION['message'] = 'Equipo Actualizado';
            $_SESSION['message_type'] = 'warning';
            header('Location: frmEquipos.php');
          }

        }else{
          $sql = "UPDATE Equipos set nombre = '$nombreequipo', estadio = '$idestadio' WHERE idequipos=$idequipos";
          $sentencia = $conexion->prepare($sql);
          $equipo_actualizado = $sentencia -> execute(); 

          if(!$equipo_actualizado){
            die('Query Failed.');
          }else{
            $_SESSION['message'] = 'Equipo Actualizado';
            $_SESSION['message_type'] = 'warning';
            header('Location: frmEquipos.php');
          }
        }
            
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Aplicativo de Liga de Futbol</title>
  <link href="../includes/css/bootstrap.min.css" rel="stylesheet">
  <link href="../includes/css/font-awesome.min.css" rel="stylesheet">
</head><!--/head-->

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">LigasApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Vistas/vistaLigas.php">Ligas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Vistas/vistaGoles.php">Goleadores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="vistaEquipos.php">Info de Equipos</a>
          </li>
        </ul>
      </div>
      </nav>
    </header>
<br>
<br>
<br>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?idequipos=<?php echo $_GET['idequipos']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombrequipo; ?>" placeholder="Actualizar Nombre">
        </div>
        <div class="form-group">
            <input name="estadio" type="text" class="form-control" value="<?php echo $nombreestadio; ?>" placeholder="Actualizar Estadio">
        </div>
        <button class="btn-success" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
  <!-- FOOTER -->
     <footer class="container">
        <p class="float-right"><a href="../index.php">Regresar al inicio</a></p>
        <p>&copy; Implementación en PostgreSQL. &middot; <a href="#"></a> &middot; <a href="#">IS</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="includes/js/jquery.min.js" ></script>
    <script src="includes/js/popper.min.js"></script>
    <script src="includes/js/bootstrap.min.js"></script>
    <script src="includes/js/holder.min.js"></script>
  </body>
</html>