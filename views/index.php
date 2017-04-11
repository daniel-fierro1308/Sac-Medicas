<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/animate.css">
    <title>Reproduction</title>
</head>
<body>
    <?php
    require('layout.php');
    ?>

    
<div id="carouselExampleControls" class="carousel slide slider" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid image" src="../public/img/slider/reproductor.svg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="../public/img/slider/visor.svg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid image" src="../public/img/slider/desarrollo.svg" alt="Third slide">
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


    <div class="row content">
        <div class="col-md-12">
        <h3 align="center">BIENVENIDOS A ESTE SITIO WEB</h3>
<p align="center" class="intro">Aquí podras guardar tu contenido multimedia,
incluyendo imagenes y videos para que los puedas observar cuando quieras,tambien podras actualizar tu información personal.
 Para ello deberas de registrarte en el sitio web y posteriormente ingresar
al sistema.<br><br><strong>Aquí podras encontrar las siguientes funcionalidades:</strong></p> 
        </div>
    </div>  
      
        <div class="row">
        <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
        <h5 align="center"><strong style="color: #069">INICIAR SESION</strong></h5>
         <div align="center"><img src="../public/img/info/iniciar_sesion.png" class="imagen" id="login" title="Click Aquí!"></div>
            <div class="text" align="center"><p id="login1">Allí podras ingresar y guardar tu contenido,
                actualizar tu información personal y cambiar tu contraseña. 
                 Para ello deberas haberte registrado anteriormente en el Sitio Web.</p></div>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-delay="1.2s">
        <h5 align="center"><strong style="color: #069">REGISTRO</strong></h5>                    
           <div align="center"><img src="../public/img/info/register.png" class="imagen" id="registro" title="Click Aquí!"></div>
            <div class="text" align="center"><p id="registro1">Para poder ingresar debes de estar registrado 
                en el Sitio Web,por eso deberas diligenciar el formulario que aparece allí con la respectiva información que se solicita.</p></div>
        </div>

        <div class="col-md-4 wow fadeInRight" data-wow-delay="1.7s">
        <h5 align="center"><strong style="color: #069">CONTACTO</strong></h5> 
           <div align="center"><img src="../public/img/info/contact_image.png" class="imagen" id="contacto" title="Click Aquí!"></div>
            <div class="text" align="center"><p id="contacto1">Por este medio podras hacernos saber tus dudas,
            quejas o reclamos y recomendaciones que tengas para nosotros.
            Tambien podras encontrar un mapa con nuestra ubicación por si deseas acercarte.</p></div>
            </div>
            </div>

            <div class="row logueate">
              <div class="col-md-12">
                <h5 align="center"><a href="registro.php">¡Asi que Registrate para disfrutar de todo lo que te ofrecemos!</a></h5>
              </div>
            </div>

    <script src="../public/js/recursos/jquery.min.js"></script>
   <script src="../public/js/recursos/wow.min.js"></script>
   <script src="../public/js/index.js"></script>
   <?php 
  require('footer.php');
?>
</body>
</html>