<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
 include('logueado.php');
 include('./controladores/conexion.php');
session_start();
if(!isset($_SESSION["documento"])){
  header("location:login.php");
} else {
$usuario = $_SESSION['documento']; 
$consulta = "SELECT nombre,apellido FROM usuarios WHERE documento = '$usuario'";
$resultado = mysqli_query($con, $consulta);
$row= mysqli_fetch_array($resultado);
}
?>
   
<strong><p id="user"> <?php echo $row['nombre']; ?>   <?php echo $row['apellido']; ?>  </p></strong>
</body>
</html> 