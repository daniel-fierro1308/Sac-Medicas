<?php
 
session_start();
if(!isset($_SESSION["documento"])){
  header("location:login.php");
}
 
echo '<h1 align=center>Bienvenido usuario:'.$_SESSION["documento"].'</h1>';
echo '<p align=center><a href="./controladores/logout.php">Logout</a></p>';
 
?>