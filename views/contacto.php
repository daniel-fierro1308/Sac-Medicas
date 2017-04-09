<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="../public/css/contacto.css">
</head>
<body>
    <?php 
        require('layout.php');
    ?>


    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3" align="center">Formulario de Contacto</h1>
            <p class="lead" align="center">Mediante este formulario podras contactarte con nosotros, envianos tus inquietudes, sugerencias o demas.</p>
        </div> 
        <div id="resultado" align="center"></div>
        <form method="post">
            <div class="formulario">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre:(s)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono:</label>
                            <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Asunto:</label>
                            <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Asunto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success" role="button" id="contacto" name="contacto">Enviar Mensaje</button>
            </div>
        </form>
    </div>
    <script src="../public/js/recursos/jquery.min.js"></script>
    <script src="../public/js/peticiones/contacto.js"></script>
       <?php 
  require('footer.php');
?>
</body>
</html>