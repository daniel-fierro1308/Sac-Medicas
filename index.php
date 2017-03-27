<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Centro de Salud Rafael Reyes</title>
</head>
<body>
    <?php
    require('layout.php');
    ?>
    
    <button class="btn btn-success boton" role="button">Manual de usuario</button>
    
    <h1 style="color:#069;">CENTRO DE SALUD RAFAEL REYES</h1>
    
<div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid image" src="public/img/slider/imagen1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="public/img/slider/imagen2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="public/img/slider/imagen3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="public/img/slider/imagen4.jpg" alt="Fourth slide">
    </div>
  <div class="carousel-item">
      <img class="d-block img-fluid image" src="public/img/slider/imagen5.jpg" alt="Five slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="public/img/slider/imagen6.jpg" alt="Sixt slide">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="row content">
        <div class="col-md-6">
        <h3 align="center" style="margin-bottom:3%; color:#069;">BIENVENIDOS A ESTE SITIO WEB, EN DONDE PODRAS REALIZAR LA SOLICITUD DE LAS CITAS MÉDICAS PARA LOS USUARIOS DEL CENTRO DE SALUD.</h3>
<p>Aquí podras solicitar tus citas médicas,
actualizar tu información personal y cambiar tu contraseña.
 Para ellos deberas de registrarte en el sitio web y posteriormente ingresar
al sistema con tu Número de documento y contraseña.</p> 
        </div>
        <div class="col-md-6">

            <div class="info"><a href="#"><img src="public/img/info/login.png"></a></div>

            <div class="text"><p><strong style="color:#069">LOG IN:</strong> Allí podras ingresar y solicitar tus citas médicas,
                actualizar tu información personal y cambiar tu conraseña. 
                 Para ello deberas haberte registrado anteriormente en el Sitio Web.</p></div>

            <div class="info"><a href="#"><img src="public/img/info/registro.png"></a></div>

            <div class="text"><p><strong style="color:#069">REGISTRO:</strong> Para poder ingresar debes de estar registrado 
                en el Sitio Web,por eso deberas diligenciar el formulario que aparece allí con la respectiva información que se solicita.</p></div>

            <div class="info"><a href="formulario contacto.php"><img src="public/img/info/contacto.png"></a></div>

            <div class="text"><p><strong style="color:#069">CONTACTO:</strong> Por este medio podras hacernos saber tus dudas,
            quejas o reclamos y recomendaciones que tengas para nosotros.
            Tambien podras encontrar un mapa con nuestra ubicación por si deseas acercarte.</p></div>
    </div>
</body>
</html>