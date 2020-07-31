<?php

//llamando a los campos necesarios

$producto= $_POST{'producto'};
$correo= $_POST{'correo'};
$cedula= $_POST{'cedula'};
$mensaje= $_POST{'mensaje'};

//Datos para el correo

$destinatario = "wcm200@gmail.com";
$asunto = "Contacto desde nuestra web de proveeduria";
$carta = "De: $cedula \n";
$carta .= "Correo: $correo \n";
$carta .= "Porductos: $producto \n";
$carta .= "Mensaje: $mensaje \n + Saludos";

//enviando mensaje por correo

mail($destinatario, $asunto, $carta);
header('Location:enviarMensaje.php');

?>