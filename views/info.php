<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi Información</title>
    <link rel="stylesheet" href="../public/css/logueado/info.css">
</head>
<body>
<?php 
    require('./controladores/conexion.php'); 
    require('layout.php');
    $usuario = $_SESSION['usuario'];
    $query= "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $registro=mysqli_query($con,$query);
    $datos = mysqli_fetch_array($registro); 
?>
     <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3" align="center">Mi Información</h1>
                <p class="lead" align="center">Aquí encontraras tu Información personal, podras editarla si asi lo deseas o simplemente observarla</p>
            </div>
        </div>


        <form method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre(s):</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre(s)" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido(s):</label>
                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp" value="<?php echo $datos['apellido']; ?>" placeholder="Apellido(s)" disabled>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp" value="<?php echo $datos['telefono']; ?>" placeholder="Telefono" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Correo" value="<?php echo $datos['correo']; ?>" disabled>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleSelect1">Nombre de Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Usuario" value="<?php echo $datos['usuario']; ?>" disabled>                
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" id="enviar" role="button" name="enviar">Actualizar Información</button>
     <button type="button" class="btn btn-success" id="validar" role="button" name="validar">Validar Información</button>
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" id="cambio">
      Cambiar Contraseña
    </label>
  </div>    
   
   <div class="row">
    <div class="col-md-4">
        <input type="password" id="antigua" name="antigua" class="cambiar form-control" placeholder="Contraseña actual">
    </div>
    <div class="col-md-4">
        <input type="password" id="nueva" name="nueva" class="cambiar form-control" placeholder="Nueva Contraseña">
    </div> 
    <div class="col-md-4">
        <input type="password" id="repetir" name="repetir" class="cambiar form-control" placeholder="Repetir Contraseña">
    </div>
   </div> 
    <button type="button" class="btn btn-success cambiar" id="validar_contra" role="button" name="validar_contra">Cambiar Contraseña</button>
</form>
</div>

<script src="../public/js/info.js"></script>

<?php
    require('footer.php');
?>
</body>
</html>