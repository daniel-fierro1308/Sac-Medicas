<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/servicios.css">
    <title>Servicios</title>
</head>
<body>
    <?php 
        require('layout.php');
    ?>
    <section class="banner" style="background-image: url('../public/img/servicios/services.png')">
        <h1 class="titulos">SERVICIOS</h1>
        <br>
        <p class="parrafos">En este sitio encontraras servicios que te ayudaran<br> a guardar varios recuerdos que te hagan sentir bien.</p>
    </section>
    <section class="reproductor">
        <h3 class="titulos">GUARDA TUS VIDEOS FAVORITOS</h3>
        <div class="row">
            <div class="col-md-6">
                <img src="../public/img/servicios/producer.svg" alt="guardar videos" class="imagenes">
            </div>
            <div class="col-md-6">
                <p class="parrafos">
                    Aqui podras guardar los videos que mas te gusten, tus favoritos y podras reproducirlos cuando quieras, igualmente podras eliminarlos si lo deseas o volverlos a agregar cuantas veces quieras!
                </p>
            </div>
        </div>
    </section>
    <section class="imagen" style="background-image: url('../public/img/servicios/services.jpg')">
        <h3 class="titulos">GUARDA TUS IMAGENES FAVORITAS</h3>
        <div class="row">
            <div class="col-md-6">
                <p class="parrafos">
                    Tambien podras guardar tus imagenes y visualizarlas en el momento en que desees, Al igual que con tus videos podras eliminarlas y volver a agregarlas las veces que desees!
                </p>
            </div>  
            <div class="col-md-6">
                <img src="../public/img/servicios/visor.png" alt="guardar imagenes" class="imagenes">
            </div>
        </div>
    </section>
    
    <section class="contacto">
        <h3 class="titulos">Contactate con nosotros</h3>
        <div class="row">
            <div class="col-md-6">
                <img src="../public/img/servicios/responsive.png" alt="Servicios de desarrollo web" class="imagenes">
            </div>
            <div class="col-md-6">
                <p class="parrafos">
                    Tambien puedes enviarnos tus inquietudes, tus preguntas y todo lo demas, cotizamos tu sitio web asi como siempre lo has deseado.
                    Desarrollamos tu sitio web a tu gusto, con la mejor calidad.
                </p>            
            </div>
        </div>
    </section>

     <?php 
  require('footer.php');
?>
</body>
<script src="../public/js/recursos/jquery.min.js"></script>
<script src="../public/js/quienes.js"></script>
</html>