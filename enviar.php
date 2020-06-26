<?php

//llamando a los campos necesarios

$nombre= $_POST{'nombre'};
$correo= $_POST{'correo'};
$telefono= $_POST{'telefono'};
$mensaje= $_POST{'mensaje'};

//Datos para el correo

$destinatario = "wcm200@gmail.com";
$asunto = "Contacto desde nuestra web de proveeduria";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n + Saludos";

//enviando mensaje por correo

mail($destinatario, $asunto, $carta);
header('Location:enviarMensaje.html');

?>