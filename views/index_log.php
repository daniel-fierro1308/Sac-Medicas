<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
</head>
<body>
<?php
 include('./controladores/conexion.php');
 include('layout.php');
if(!isset($_SESSION["documento"])){
  header("location:../login.php");
} else {
$usuario = $_SESSION['documento']; 
$consulta = "SELECT nombre,apellido FROM usuarios WHERE documento = '$usuario'";
$resultado = mysqli_query($con, $consulta);
$row= mysqli_fetch_array($resultado);
}
?>
  <strong><p id="user">Bienvenido!<?php echo $row['nombre']; ?>   <?php echo $row['apellido']; ?>  </p></strong>
  
</body>
</html> 