<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$tipodeaplicacion=$_POST['selCombo'];
$mensaje = $_POST['mensaje'];

$header = 'From: '.$email."\r\n";
$header .= "X-Mailer: PHP/".phpversion()."\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .="Content-Type: text/plain";

$mensaje= "Este mensaje fue enviado por ".$nombre.$apellido.",\r\n";
$mensaje.="Celular: ". $celular ."\r\n";
$mensaje.="Teléfono: ". $telefono ."\r\n";
$mensaje.="E-mail: ". $email ."\r\n";
$mensaje.="Tipo de aplicación". $tipodeaplicacion."\r\n";
$mensaje.="Mensaje: ".$_POST['mensaje']." \r\n";
$mensaje.="Enviado el ".date('d/m/Y',time());
$para='sc@softcompany.com.gt';
$asunto='Asunto del e-mail recibido';
mail($para,$asunto,utf8_decode($mensaje),$header);
header("Location:index.html")
 ?>
