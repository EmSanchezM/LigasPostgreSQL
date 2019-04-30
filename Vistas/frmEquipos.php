<?php
include_once '../Modelo/Conexion.php';
include_once '../Modelo/RepositorioEquipos.php';

Conexion::abrirConexion();
$conexion = Conexion::obtenerConexion();
$equipos = RepositorioEquipos::obtener_todos($conexion);
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
            <a class="navbar-brand" href="../index.php">LigasApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vistaLigas.php">Ligas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="vistaGoles.php">Goleadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="vistaEquipos.php">Info de Equipos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="vistaArbitros.php">Info de Arbitros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="vistaResultados.php">Info de Resultados</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
    <br>
    <br>
    <main class="container p-4">
        <div class="row">
            <div class="col-md-3">
                    <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="agregar.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Equipo">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fecha" class="form-control" placeholder="Fecha de Fundacion">
                        </div>
                        <div class="form-group">
                            <input type="text" name="estadio" class="form-control" placeholder="Estadio">
                        </div>
                        <input type="submit" name="agregar" class="btn btn-success btn-block" value="Guardar">
                    </form>
                </div>    
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre de Equipo</th>
                            <th>Fecha de Fundacion</th>
                            <th>Estadio</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($equipos as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['idequipos'] ?></td>
                            <td><?php echo $row['nombreequipo'] ?></td>
                            <td><?php echo $row['fechafundacion'] ?></td>
                            <td><?php echo $row['nombreestadio'] ?></td>
                            <td style="text-align: center;">
                                <a href="editar.php?idequipos=<?php echo $row['idequipos'] ?>" class="btn btn-warning btn-xs">
                                    <span class="fa fa-pencil-square-o"></span>
                                </a>
                            </td>
                            <td style="text-align: center">
                                <a href="eliminar.php?idequipos=<?php echo $row['idequipos'] ?>" class="btn btn-danger">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </td>
                            
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main> 
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="includes/js/jquery.min.js" ></script>
    <script src="includes/js/popper.min.js"></script>
    <script src="includes/js/bootstrap.min.js"></script>
    <script src="includes/js/holder.min.js"></script>
  </body>
</html>