<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Información</title>
    <link rel="stylesheet" href="../public/css/logueado/info.css">

     <template id="mensaje">
        <div class="alert alert-{{type}}" role="alert">
            {{body}}
        </div>
    </template>

</head>
<body>
<?php 
    require('./controladores/conexion.php'); 
    require('layout.php');
    if(!isset($_SESSION["usuario"])){
  header("location: login.php");
} else {
    $usuario = $_SESSION['usuario'];
    $query= "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $registro=mysqli_query($con,$query);
    $datos = mysqli_fetch_array($registro); 
    }
?>
     <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3" align="center">Mi Información</h1>
                <p class="lead" align="center">Aquí encontraras tu Información personal, podras editarla si asi lo deseas o simplemente observarla</p>
            </div>
        </div>

        <div id="alerta" align="center"></div>
        <div id="result" align="center"></div>
        <form method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre(s):</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre(s)" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido(s):</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $datos['apellido']; ?>" placeholder="Apellido(s)" disabled>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="<?php echo $datos['telefono']; ?>" placeholder="Telefono" disabled onblur="revisar(this)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php echo $datos['correo']; ?>" disabled onblur="revisar(this); revise_correo();">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleSelect1">Nombre de Usuario</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" value="<?php echo $datos['usuario']; ?>" disabled onblur="revisar(this)">                
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" id="enviar" role="button" name="enviar">Actualizar Información</button>
    <div class="row">
        <div class="col-md-2">
            <button type="button" class="btn btn-success" id="validar" role="button" name="validar" onclick = "validar_datos()">Validar Información</button>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger" id="cancelar" role="button" name="cancelar">Cancelar</button>
        </div>
    </div>

    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" id="cambio">
      Cambiar Contraseña
    </label>
  </div>    
   
   <div class="row">
    <div class="col-md-4">
        <input type="password" id="antigua" name="antigua" class="cambiar form-control vacio" placeholder="Contraseña actual">
    </div>
    <div class="col-md-4">
        <input type="password" id="nueva" name="nueva" class="cambiar form-control vacio" placeholder="Nueva Contraseña">
    </div> 
    <div class="col-md-4">
        <input type="password" id="repetir" name="repetir" class="cambiar form-control vacio" placeholder="Repetir Contraseña">
    </div>
   </div> 
    <button type="button" class="btn btn-success cambiar" id="validar_contras" role="button" name="validar_contras" onclick = "validar_contra()">Cambiar Contraseña</button>
</form>
</div>

<script src="../public/js/peticiones/info.js"></script>
<script src="../public/js/validar_info.js"></script>
<script src="../public/js/peticiones/cambio_contra.js"></script>

<?php
    require('footer.php');
?>
</body>
</html>