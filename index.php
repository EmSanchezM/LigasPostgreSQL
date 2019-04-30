<?php
  include_once 'Vistas/header.php';
?>
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="includes/images/sliders/1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <p><a class="btn btn-lg btn-primary" href="Vistas/frmEquipos.php" role="button">Iniciar Ahora</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="includes/images/sliders/2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <p><a class="btn btn-lg btn-primary" href="Vistas/frmEquipos.php" role="button">Iniciar Ahora</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="includes/images/sliders/3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="Vistas/frmEquipos.php" role="button">Iniciar Ahora</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<?php
  include_once 'Vistas/footer.php';
?>  