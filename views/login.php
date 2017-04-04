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
            <p class="lead more">Si usted no cuenta con un usuario registrado, lo invitamos a que se registre ingresando al siguiente enlace <a href="registro.php">REGISTRARSE.</a> 
                                Diligencie el formulario que aparece allí y asi posteriormente ingresar a la página. 
                            Registrese en la pagina ingresando al enlace anterior o dirigiendose a la sección REGISTRAR del menú en la parte superior de la página. </p>
            <p class="lead">
            <a class="btn btn-success btn-lg" id="learn" href="#" id="leer" role="button">Leer más</a>
            </p>
        </div>
        <div class="center">
        <div id="alerta"></div>
        <form method="post">
            <div class="col-md-11">
            <div class="form-group">
                <label for="exampleSelect1">Numero de documento</label>
                <input type="number" class="form-control" id="documento" name="documento" aria-describedby="emailHelp" placeholder="Numero de Documento">                
            </div>
        </div>
        <div class="col-md-11">
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
            </div>
        </div>
        <div class="form-group">
            <button type="button" name="login" id="login" class="btn btn-success" role="button" onclick="validar_login()">Iniciar Sesión</button>
              <small id="emailHelp" class="form-text text-muted"><a href="login.php">¿Olvidó su Contraseña?</a></small>
        </div>
        </div>
        </form>
    </div>
</body>
<script src="../public/js/recursos/jquery.min.js"></script>
<script src="../public/js/handlebars.js"></script>
<script src="../public/js/login.js"></script>

<script>
        $(document).ready(function(){
            $('.more').hide();
            $('#learn').click(function(){
                $('.more').toggle(1000);
            });
        });
    </script>
</html>