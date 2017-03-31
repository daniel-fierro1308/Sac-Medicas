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
  <p class="lead more">Si usted no cuenta con un usuario registrado, lo invitamos a que se registre ingresando su información personal en el siguiente formulario.
<br>
Diligencie el formulario y asi posteriormente ingresar a la p&aacute;gina.</p>

<p class="lead more">Registrandose en la pagina podra ingresar a ella y posteriormente podra solicitar su cita médica y llevar a cabo las distintas funciones que se encuentran allí.</p>
  <p class="lead">
    <a class="btn btn-success btn-lg" id="learn" href="#" id="leer" role="button">Leer más</a>
  </p>
</div>
    <div id="alerta" align="center"></div>
    <form>
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
                <label for="exampleSelect1">Tipo de documento</label>
                <select class="form-control" id="Tipo_documento">
                    <option>Tarjeta de identidad</option>
                    <option>Cedula de Ciudadania</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleSelect1">Numero de documento</label>
                <input type="number" class="form-control" id="documento" name="documento" aria-describedby="emailHelp" placeholder="Número de Documento" onblur="revisar(this)">                
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
                <label for="exampleInputEmail1">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Correo" onblur="revisar(this); revisaremail();">
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
  <button type="button" class="btn btn-primary" id="enviar" role="button" onclick="validar()">Registrarme</button>
  <small id="emailHelp" class="form-text text-muted">¿Ya tienes una cuenta? <a href="login.php">Entra aquí</a></small>
</form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../public/js/handlebars.js"></script>
    <script src="../public/js/registro.js"></script>
    <script>
        $(document).ready(function(){
            $('.more').hide();
            $('#learn').click(function(){
                $('.more').toggle(1000);
            });
        });
    </script>
</body>
</html>