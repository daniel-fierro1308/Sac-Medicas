<?php 
session_start();
include('conexion.php');

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' OR correo = '$usuario'  AND contrasena= '$contrasena'";
    $resultado = mysqli_query($con, $sql);
    $num_row = mysqli_num_rows($resultado);
    if($num_row == '1'){
        $data = mysqli_fetch_array($resultado);
        $_SESSION["usuario"] = $data["usuario"];
        echo "1";
    } else {
        echo "error";
    }
?>