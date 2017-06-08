<?php
    require('conexion.php');
    sleep(2);
    session_start();
    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
    $telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
    $correo = mysqli_real_escape_string($con, $_POST["correo"]);
    $user = $_SESSION["usuario"];

    $sql = "SELECT correo FROM usuarios WHERE correo = '$correo' AND usuario = '$user'";
    $res = mysqli_query($con, $sql);
    $datas = mysqli_fetch_array($res);
    $email = $datas["correo"];    
   
     $sql = "SELECT correo FROM usuarios WHERE correo = '$correo'";
     $result = mysqli_query($con, $sql);
     $datos = mysqli_fetch_array($result);

        if($datos != $datas) {
            echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>El correo ingresado ya esta registrado en otra cuenta</div>";
        } else if($correo == $email && $datos == $datas || $correo != $email) {
           $sql = "UPDATE usuarios set nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', correo = '$correo'  WHERE usuario = '$user'";
            mysqli_query($con, $sql);
            echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Su informacion se ha actualizado correctamente</div>";
        }

?>