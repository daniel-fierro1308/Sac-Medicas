<?php
    include('conexion.php');
    session_start();
    $telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
    $correo = mysqli_real_escape_string($con, $_POST["correo"]);
    $user = $_SESSION["usuario"];
    $alerta = "";

    $sql = "SELECT correo FROM usuarios WHERE correo= '$correo'";
    $res = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($res);
    
    if($alerta != ""){
        echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>$alerta</div>";
    } else {
         $sql = "UPDATE usuarios SET telefono = '$telefono', correo = '$correo' WHERE usuario = '$user'";
         mysqli_query($con, $sql);
         echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Su informacion se ha actualizado correctamente</div>";
    }
?>