<?php
    include('conexion.php');
    sleep(2);
    session_start();
    $telefono = mysqli_real_escape_string($con, $_POST["telefono"]);
    $correo = mysqli_real_escape_string($con, $_POST["correo"]);
    $user = $_SESSION["usuario"];
    $alerta = "";

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
            $sql = "UPDATE usuarios SET telefono = '$telefono', correo = '$correo' WHERE usuario = '$user'";
            mysqli_query($con, $sql);
            echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Su informacion se ha actualizado correctamente</div>";
        }

    // if($alerta != ""){
    //     echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>$alerta</div>";
    // } else {
    //      $sql = "UPDATE usuarios SET telefono = '$telefono', correo = '$correo' WHERE usuario = '$user'";
    //      mysqli_query($con, $sql);
    //      echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Su informacion se ha actualizado correctamente</div>";
    // }
?>