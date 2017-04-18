<?php  
if (isset($_SESSION["usuario"])) {
  header("location:index_log.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/login.css">
    <title>Iniciar Sesion</title>

    <template id="mensaje">
        <div class="alert alert-{{tipo}}" role="alert">
            {{body}}
        </div>
    </template>
</head>
<body>
    <?php
        require('layout.php');
    ?>
    <div class="container">
          <div class="jumbotron">
            <h1 class="display-3 animated fadeInDown">INICIO DE SESION</h1>
            <a class="btn btn-success btn-lg" id="ver" role="button" data-toggle="collapse" href="#leer" aria-expanded="false" aria-controls="leer" role="button">Leer más</a>
            <div class="lead collapse animated fadeInRight" id="leer" align="center">
                Si no cuentas con un usuario registrado,te invitamos a que te registres ingresando al siguiente enlace <a href="registro.php">REGISTRARSE.</a> 
                Allí Diligencia el formulario y asi posteriormente podras iniciar sesión. 
                Registrate en la pagina ingresando al enlace anterior o dirigiendose a la sección REGISTRARSE del menú en la parte superior. 
            </div>
        </div>
        <div id="result" align="center"></div>
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleSelect1">Nombre de usuario o correo</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Nombre de usuario">                
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                    </div>
                </div>
        </div>
        
            <div class="form-group">
                <button type="button" name="login" id="login" class="btn btn-success" role="button" onclick="validar_login()">Iniciar Sesión</button>
                <small id="emailHelp" class="form-text text-muted"><a href="login.php">¿Olvidó su Contraseña?</a></small>
            </div>
    </form>
    </div>
</body>
<script src="../public/js/recursos/jquery.min.js"></script>
<script src="../public/js/login.js"></script>
<script src="../public/js/peticiones/loguear.js"></script>
  <?php 
  require('footer.php');
?>
</html>