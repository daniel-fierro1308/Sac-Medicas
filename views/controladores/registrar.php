<?php 
      include('conexion.php');  
    
    $nombre = $_POST["nombre"]; 
    $apellido = $_POST["apellido"];
    $tipo_documento = $_POST["tipo_documento"];
    $documento = $_POST["documento"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $alerta = "";

    $sql = "SELECT * FROM usuarios WHERE documento='$documento'";
    $res = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($res);
    if ($data > 0) {
      $alerta .= "<br>-El número de documento ya esta registrado";
    }
  
      $sql = "SELECT * FROM usuarios WHERE correo ='$correo'";
      $res = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($res);
      if ($data > 0) {
        $alerta .= "<br>-El correo ingresado ya está registrado.";
      }
  
 
  if ($alerta != "") {
    echo "<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Error</strong><br>$result</div>";
  } else {
    $sql = "INSERT INTO usuarios(nombre, apellido, tipo_documento, documento, telefono, correo, contrasena) VALUES( '$nombre', '$apellido', '$tipo_documento', '$documento', '$telefono', '$contrasena')";
    mysqli_query($con, $sql);
    echo "<div class='alert alert-dismissible alert-success'><button type='button' class='close' data-dismiss='alert'>×</button><strong>¡Correcto!</strong><br>Se ha registrado correctamente.</div>";
  } 
?>