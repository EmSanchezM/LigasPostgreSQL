<?php
include_once '../Modelo/Conexion.php';
include_once '../Modelo/RepositorioEquipos.php';
include_once '../Modelo/RepositorioLigas.php';

Conexion::abrirConexion();
$conexion = Conexion::obtenerConexion();
$resultLiga = RepositorioLigas::obtener_todos($conexion);
$temporadas = RepositorioEquipos::obtener_temporadas($conexion);
$ligas = RepositorioLigas::obtener_ligas($conexion);
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
                    <a class="nav-link " href="frmCalendario.php">Calendario de Resultados de Partidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="simulacionCalendario.php">Calendario de Resultados de Partidos</a>
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
                    <form action="agregarCalendario.php" method="POST">
                        <div class="form-group">
                            <select class="form-control" name="temporadas" id="temp">
                                <?php foreach($temporadas as $temp){ ?>
                                <option value="<?php echo $temp['idTemporada'] ?>"><?php echo $temp['descripcion'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="ligas" id="ligas">
                                <?php foreach($ligas as $li){ ?>
                                <option value="<?php echo $li['idliga'] ?>"><?php echo $li['nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="fecha" class="form-control" placeholder="Fecha de Partido">
                        </div>
                        <div class="form-group">
                            <input type="text" name="local" class="form-control" placeholder="Equipo Local">
                        </div>
                        <div class="form-group">
                            <input type="text" name="visitante" class="form-control" placeholder="Equipo Visitante">
                        </div>
                        <div class="form-group">
                            <input type="text" name="resultado" class="form-control" placeholder="Resultado">
                        </div>
                        <input type="submit" name="agregar" class="btn btn-success btn-block" value="Guardar">
                    </form>
                </div>    
            </div>
            <div class="col-md-9">
                <table style="text-aling: center;" id="datatable" class="table table-hover">
                    <thead style="background-color: #dc3545; color: white; font-weight:bold;">
                    <tr>
                        <td>No</td>
                        <td>Fecha del Partido</td>
                        <td>Equipo Local</td>
                        <td>Equipo Visitante</td>
                        <td>Resultado</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                    </thead>
                    <tfoot style="background-color: #ccc; color: white; font-weight:bold;">
                    <tr>
                        <td>No</td>
                        <td>Fecha del Partido</td>
                        <td>Equipo Local</td>
                        <td>Equipo Visitante</td>
                        <td>Resultado</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                    </tfoot>
                <tbody>
                <?php
                foreach($resultLiga as $row){
                ?>
                <tr>
                    <td><?php echo $row['idpartidos'] ?></td>
                    <td><?php echo $row['fechapartido'] ?></td>
                    <td><?php echo $row['equipolocal'] ?></td>
                    <td><?php echo $row['equipovisitante'] ?></td>
                    <td><?php echo $row['resultado'] ?></td>
                    <td style="text-align: center;">
                        <a href="editar.php?idpartidos=<?php echo $row['idpartidos'] ?>" class="btn btn-warning btn-xs">
                            <span class="fa fa-pencil-square-o"></span>
                        </a>
                    </td>
                    <td style="text-align: center">
                        <a href="eliminar.php?idpartidos=<?php echo $row['idpartidos'] ?>" class="btn btn-danger">
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