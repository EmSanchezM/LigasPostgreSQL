<?php
include_once '../Modelo/Conexion.php';
include_once '../Modelo/RepositorioArbitros.php';

Conexion::abrirConexion();
$conexion = Conexion::obtenerConexion();
$arbitros = RepositorioArbitros::obtener_todos($conexion);
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
    <br>
    <h2>Información de los Arbitros</h2>
<div class="table-responsive-sm">
    <div class="col-md-8">
      <table style="text-aling: center;" id="datatable" class="table table-hover">
        <thead style="background-color: #dc3545; color: white; font-weight:bold;">
          <tr>
            <td>No</td>
            <td>Experiencia</td>
            <td>Edad</td>
            <td>Nombre</td>
          </tr>
        </thead>
            <tfoot style="background-color: #ccc; color: white; font-weight:bold;">
              <tr>
                <td>No</td>
                <td>Experiencia</td>
                <td>Edad</td>
                <td>Nombre</td>
              </tr>
            </tfoot>
      <tbody>
        <?php
          foreach($arbitros as $row){
         ?>
        <tr>
          <td><?php echo $row['idarbitro'] ?></td>
          <td><?php echo $row['experiencia'] ?></td>
          <td><?php echo $row['edad'] ?></td>
          <td><?php echo $row['nombre'] ?></td>
        </tr>
      <?php  } ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>

  <footer class="container">
        <p class="float-right"><a href="../index.php">Regresar al inicio</a></p>
        <p>&copy; Implementación de Vistas en PostgreSQL. &middot; <a href="#">Elvin Sánchez</a> &middot; <a href="#">Elvin Sánchez</a></p>
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