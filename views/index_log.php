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
     <img class="d-block img-fluid image" src="../public/img/slider/imagen1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block img-fluid image" src="../public/img/slider/imagen2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="../public/img/slider/imagen3.jpg" alt="Third slide">
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
    </div>
  </div> 
  <div class="row funcionalidades">
    <div class="col-md-12">
    <h5 align="center">Ademas aqui podras encontrar las siguientes funcionalidades</h5>
    </div>
  </div>
</body>
</html> 