<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis Imagenes</title>
</head>
<body>
    <?php 
        require('layout.php');
    ?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3 animated fadeInLeft">GUARDAR IMAGENES</h1>
            <a class="btn btn-success btn-lg" data-toggle="collapse" href="#leer" id="ver" aria-expanded="false" aria-controls="leer" role="button">Leer más</a>
            <div class="lead collapse animated slideInLeft" id="leer" align="center">    
                Aqui podras guardar tus imagenes preferidas, ademas de esto podras editarlas o eliminarlas en el momento que tu decidas hacerlo.
                Para esto solo debes seleccionar la imagen que quieres editar o eliminar y dar clic en cualquiera de los botones y listo.
            </div>
    </div>

    <div align="center">
    <h2 class="display-4">Subir Imagenes</h2>
    <br>
        <input type="file" role="button" value="Subir Imagenes" id="btn_imagen" name="imagen" size="30">
        <br><br>
        <button type="button" role="button" class="btn btn-success">Enviar</button>
    </div>


</div>
</body>
</html>