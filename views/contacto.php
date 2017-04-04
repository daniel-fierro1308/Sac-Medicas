<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
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
        <form>
            <div class="formulario">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre(requerido):</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre:(s)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono:</label>
                            <input type="number" id="nombre" name="nombre" class="form-control" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Asunto:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Asunto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleTextarea">Mensaje:</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success" role="button" id="enviar" name="enviar">Enviar Mensaje</button>
            </div>
        </form>
    </div>
</body>

</html>