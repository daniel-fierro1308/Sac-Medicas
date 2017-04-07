<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $destino = "daniel13081@outlook.com";

 $headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cuerpo = "Asunto:".$asunto."<br>";
$cuerpo .= "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
$cuerpo .= "Mensaje: ".$mensaje;

if($nombre != '' && $email != '' && $telefono != '' &&$asunto != '' && $mensaje != ''){
    mail($destino,$asunto,$cuerpo,$headers); //ENVIAR!
    echo "<div class='alert alert-dismissible alert-success'><strong>¡Correcto!</strong>Se ha enviado su mensaje.</div>";
} else {
    echo "<div class='alert alert-dismissible alert-danger'>No ha enviado su mensaje.</div>";
}
?>