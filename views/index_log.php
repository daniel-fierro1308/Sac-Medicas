<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="../public/css/logueado/index_log.css">
</head>
<body>
<?php
 include('./controladores/conexion.php');
 include('layout.php');
if(!isset($_SESSION["usuario"])){
  header("location:../login.php");
} else {
$usuario = $_SESSION['usuario']; 
$consulta = "SELECT nombre,apellido FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($con, $consulta);
$row= mysqli_fetch_array($resultado);
}
?>

<div class="row bienvenida">
  <div class="col-md-12"> 
    <strong><a href="index_log.php"><?php echo $row['nombre']; ?>   <?php echo $row['apellido'];?></a></strong>
  </div>
</div>

    <div id="carouselExampleControls" class="carousel slide slider" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
     <img class="d-block img-fluid image" src="../public/img/slider/desarrollo.svg" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block img-fluid image" src="../public/img/slider/visor.svg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="../public/img/slider/reproductor.svg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev indicador" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next indicador" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <div class="row contenido">
    <div class="col-md-12">
     <h1 align="center">Bienvenido de nuevo!!</h1>  
    <p class="intro" align="center">Ahora que te has registrado y has iniciado sesión, podras disfrutar de todos nuestros servicios, y lo mejor totalmente gratis.
      Ahora podras guardar todas tus imagenes o fotos y verlas en el momento que desees, tambien podras hacer lo mismo con tus videos, podras borrarlos y volver a añadirlos las veces que quieras. 
    </p>

    <h5 align="center">Ademas aqui te resumimos y mostramos las siguientes funcionalidades:</h5>
    </div>
  </div> 

  <div class="row">
    <div class="col-md-4">
      <h5 align="center"><strong style="color: #069">Guardar Videos</strong></h5>
     <div align="center"><img src="../public/img/logueado/videos_v.png" alt="visor de videos" class="imagen" id="videos" title="Click Aquí!" data-toggle="collapse" href="#videos1" aria-expanded="false" aria-controls="videos1" role="button"></div>
     <div class="text collapse" align="center" id="videos1"><p>Aqui podras guardar tus videos favoritos y verlos, tambien podras guardar los videos de Youtube que mas te gusten, podras agregarle un titulo y una descripción si así lo deseas.</p></div>
    </div>

    <div class="col-md-4">
      <h5 align="center"><strong style="color: #069">Guardar Imagenes</strong></h5>     
      <div align="center"><img src="../public/img/logueado/imagenes.png" alt="ver imagenes" class="imagen" id="imagen" title="Click Aquí!" data-toggle="collapse" href="#imagen1" aria-expanded="false" aria-controls="imagen1" role="button"></div> 
      <div class="text collapse" align="center" id="imagen1"><p>Aqui podras guardar tus imagenes favoritas,verlas y descargarlas en el momento en que lo necesites,podras agregarle un titulo y una descripcion si asi lo deseas.</p></div>
    </div>
    <div class="col-md-4">
      <h5 align="center"><strong style="color: #069">Ver mi Información</strong></h5>
      <div align="center"><img src="../public/img/logueado/info.png" alt="ver información" class="imagen" id="informacion" title="Click Aquí!" data-toggle="collapse" href="#informacion1" aria-expanded="false" aria-controls="informacion1" role="button"></div>
      <div class="text collapse" align="center" id="informacion1"><p>Aqui podras ver tu informacion, la cual ingresaste al momento de registrarte, ademas de esto podras editarla, tambien allí podras cambiar tu contraseña si así lo deseas.</p></div>
    </div>
  </div>
  <?php
    require('footer.php');
   ?>
  <script src="../public/js/recursos/jquery.min.js"></script>
</body>
</html> 