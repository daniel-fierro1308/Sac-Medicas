<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.more').hide();
            $('#learn').click(function(){
                $('.more').toggle(1000);
            });
        });
    </script>
    <title>Registrarse</title>
</head>
<body>
    <?php 
        require('layout.php');
    ?>
    <div class="container">
    <div class="jumbotron">
  <h1 class="display-3">REGISTRO DE USUARIOS</h1>
  <p class="lead more">Si usted no cuenta con un usuario registrado, lo invitamos a que se registre ingresando su información personal en el siguiente formulario.
<br>
Diligencie el formulario y asi posteriormente ingresar a la p&aacute;gina.</p>

<p class="lead more">Registrandose en la pagina podra ingresar a ella y posteriormente podra solicitar su cita médica y llevar a cabo las distintas funciones que se encuentran allí.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" id="learn" href="#" id="leer" role="button">Leer màs</a>
  </p>
</div>

    <form>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre(s):</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre(s)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido(s):</label>
                <input type="text" class="form-control" id="apellido" aria-describedby="emailHelp" placeholder="Apellido(s)">
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
                <input type="text" class="form-control" id="numero_documento" aria-describedby="emailHelp" placeholder="Apellido(s)">                
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="number" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="Telefono">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" placeholder="Contraseña">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Repetir Contraseña</label>
                <input type="password" class="form-control" id="re_contrasena" placeholder="Repetir Contraseña">
            </div>
        </div>
  </div>
  <button type="submit" class="btn btn-primary" id="enviar" role="button">Registrarme</button>
</form>
</div>
</body>
</html>