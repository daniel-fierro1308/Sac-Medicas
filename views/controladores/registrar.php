<?php 
      include('conexion.php');  
    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]); 
    $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
    $usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
    $telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
    $correo = mysqli_real_escape_string($con, $_POST["correo"]);
    $contrasena = mysqli_real_escape_string($con, $_POST["contrasena"]);
    $alerta = "";

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $res = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($res);
    if ($data > 0) {
      $alerta .= " El nombre de usuario ya esta registrado";
    }
      // if (ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@+([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$", $correo)){
           $sql = "SELECT * FROM usuarios WHERE correo ='$correo'";
      $res = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($res);
      if ($data > 0) {
        $alerta .= " El correo ingresado ya está registrado";
      }
      // } else {
      //   $alerta.= "El correo ingresado no es valido";
      // }           

  if ($alerta != "") {
    echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>$alerta </div>";
  } else {
    $sql = "INSERT INTO usuarios(nombre, apellido, usuario, telefono, correo, contrasena) VALUES( '$nombre', '$apellido', '$usuario', '$telefono','$correo', '$contrasena')";
    mysqli_query($con, $sql);
    echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Se ha registrado correctamente.</div>";
  } 
?>