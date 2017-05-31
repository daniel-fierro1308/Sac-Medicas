<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/logueado/contact_developer.css">
    <title>Contactarse con el desarrollador</title>

    <template id="mensaje">
        <div class="alert alert-{{tipo}}" role="alert">
            {{body}}
        </div>
    </template>
</head>
<body>
   <?php
   require('./controladores/conexion.php');
    require('layout.php');

     $usuario = $_SESSION['usuario'];
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $registro = mysqli_query($con,$query);
    $datos = mysqli_fetch_array($registro); 
   ?> 
   <div class="container">
    <div class="jumbotron">
            <h1 class="display-3" align="center">Contactate con el Desarrollador</h1>
            <p class="lead" align="center">Mediante este formulario podras contactarte con los desarrolladores directamente,
             comentarles tus inquietudes y te responderan en el menor tiempo posible.</p>
        </div>
        <div id="result" align="center"></div>
        <form method = "post">
             <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" align="center">
                            <label>Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control msg" value="<?php echo $datos['nombre'];?> <?php echo $datos['apellido'];?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" align="center">
                            <label>E-mail:</label>
                            <input type="text" id="email" name="email" class="form-control msg" value="<?php echo $datos['correo']; ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="row" align="center">
                <div class="col-md-6" align="center">
                        <div class="form-group" align="center">
                            <label>Usuario:</label>
                            <input type="text" id="usuario" name="usuario" class="form-control msg" value="<?php echo $datos['usuario']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" align="center">
                            <label>Asunto:</label>
                            <input type="text" id="asunto" name="asunto" class="form-control msg" placeholder="Asunto">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" align="center">
                            <label for="exampleTextarea">Mensaje:</label>
                            <textarea class="form-control msg" id="message" name="mensaje" rows="3" placeholder="Deja tu mensaje Aquí"></textarea>
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                <button type="button" class="btn btn-success" role="button" id="contacto" name="contacto" onclick = "validar_campos()">Enviar Mensaje</button>
            </div>
        </form> 
   </div>

   <script src="../public/js/peticiones/contact_developer.js"></script>
   <script src="../public/js/login.js"></script>

   <?php 
  require('footer.php');
?>
</body>
</html>