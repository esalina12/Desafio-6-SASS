<?php
$nombre=$_POST{"name"};
$mail=$_POST{"email"};
$telefono=$_POST{"telefono"};
$mensaje=$_POST{"mensaje"};

$header .="Content-type : text/plain";

$mensaje="Este mensaje fue enviado por" .$nombre . ",\r\n";
$mensaje.="Su email es: " . $mail . "\r\n";
$mensaje.="Su telefono es : " $telefono . "\r\n";
$mensaje.="Su mensaje es : " $mensaje . "\r\n";

$para="eze2334@gmail.com";
$asunto="Este mail fue enviado desde la web";

mail($para, $asunto, utf8_decode($mensaje), $header);

header{"location:exito.html"};

?>