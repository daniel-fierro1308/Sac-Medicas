<?php 
session_start();
include('conexion.php');

    $documento = $_POST["documento"];
    $contrasena = $_POST["contrasena"];
    $sql = "SELECT * FROM usuarios WHERE documento = '$documento' AND contrasena= '$contrasena'";
    $resultado = mysqli_query($con, $sql);
    $num_row = mysqli_num_rows($resultado);
    if($num_row == '1'){
        $data = mysqli_fetch_array($resultado);
        $_SESSION["documento"] = $data["documento"];
        echo "1";
    } else {
        echo "error";
    }
?>