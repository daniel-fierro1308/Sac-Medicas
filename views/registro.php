<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/registro.css">
    <title>Registrarse</title>

    <template id="mensaje">
        <div class="alert alert-{{type}}" role="alert">
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
            <h1 class="display-3 animated fadeInLeft">REGISTRO DE USUARIOS</h1>
            <a class="btn btn-success btn-lg" data-toggle="collapse" href="#leer" id="ver" aria-expanded="false" aria-controls="leer" role="button">Leer más</a>
            <div class="lead collapse animated slideInLeft" id="leer" align="center">    
                    Si no cuentas con un usuario registrado, te invitamos a que te registres ingresando tu información personal en el siguiente formulario.
                    Diligencia el formulario y asi posteriormente ingresar a la página.
                    Registrandote podras ingresar y posteriormente podras acceder a los servicios que ofrecemos y a las distintas funciones que se encuentran allí.</div>
            </div>

    <div id="alerta" align="center"></div>
    <div id="result" align="center"></div>
    <form method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre(s):</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre(s)" onblur="revisar(this)" 
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido(s):</label>
                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp" placeholder="Apellido(s)" onblur="revisar(this)">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp" placeholder="Telefono" onblur="revisar(this);">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre de Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Usuario" onblur="revisar(this);">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleSelect1">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" onblur="revisar(this); revisaremail();">                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" onblur="revisar(this); revisarContra();">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Repetir Contraseña</label>
                <input type="password" class="form-control" id="re_contrasena" name="re_contrasena" placeholder="Repetir Contraseña" onblur="revisar(this);">
            </div>
        </div>
  </div>
  <button type="button" class="btn btn-primary" id="enviar" role="button" name="enviar" onclick="validar()">Registrarme</button>
  <small id="emailHelp" class="form-text text-muted">¿Ya tienes una cuenta? <a href="login.php">Entra aquí</a></small>
</form>
</div>
    <script src="../public/js/recursos/jquery.min.js"></script>
    <script src="../public/js/peticiones/registrar.js"></script>
    <script src="../public/js/registro.js"></script>
    
       <?php 
  require('footer.php');
?>
</body>
</html>