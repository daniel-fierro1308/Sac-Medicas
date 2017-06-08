<?php
    require('conexion.php');
    sleep(2);
    session_start();
    $antigua = mysqli_real_escape_string($con, $_POST["antigua"]);
    $nueva = mysqli_real_escape_string($con, $_POST["nueva"]);
    $repetir = mysqli_real_escape_string($con, $_POST["repetir"]);
    $user = $_SESSION["usuario"];

    $sql = "SELECT contrasena FROM usuarios WHERE usuario = '$user'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($result);
    $contra = $data["contrasena"];

    if ($antigua != $contra) {
        echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>La cotraseña actual ingresada no coincide con la registrada</div>";
     } else {
        $sql = "UPDATE usuarios set contrasena = '$nueva' WHERE usuario = '$user'";
        mysqli_query($con, $sql);
        echo "<div class ='alert alert-dismissible alert-success'><strong>Correcto </strong>Su contraseña se ha actualizado correctamente</div>";
    }

?>