<?php
    include('conexion.php');
    session_start();
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $user = $_SESSION["usuario"];
    $alerta = "";

    $sql = "SELECT correo FROM usuarios WHERE correo= '$correo'";
    $res = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($res);

    if($data > 0){
        $alerta .= "El correo ingresado ya esta registrado en otra cuenta, por favor vuelva a intentar";
    }
    
    if($alerta != ""){
        echo "<div class='alert alert-dismissible alert-danger'><strong>Error </strong>$alerta</div>";
    } else {
        $sql = "UPDATE usuarios SET telefono = '$telefono', correo = '$correo' WHERE usuario = '$user'";
         mysqli_query($con, $sql);
         echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong><br>Su informacion se ha actualizado correctamente</div>";
    }
?>