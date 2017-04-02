<?php 
      include('conexion.php');  

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $tipo_documento = $_POST["tipo_documento"];
    $documento = $_POST["documento"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    // Consultar para insertar en la BD
    $insertar = "INSERT INTO usuarios(nombre, apellido, tipo_documento, documento, telefono, correo, contrasena)
     VALUES('$nombre', '$apellido', '$tipo_documento', '$documento', '$telefono', '$correo', '$contrasena')";

     $verificar_documento = mysqli_query($con, "SELECT * FROM usuarios WHERE documento = '$documento' AND correo = '$correo'"); 

     if(mysqli_num_rows($verificar_documento) > 0) {
         echo "El documento o el correo ya estan registrados";
         exit;
     }
     // Ejecutar consulta
     $resultado = mysqli_query($con, $insertar);

     if(!$resultado) {
         echo "Error al registrarse";
     } else {
         echo "Usuario registrado exitosamente";
     }

     //cerrar la conexion
     mysqli_close($con);
?>