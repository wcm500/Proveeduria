<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<!---Este formulario confirma que el mensaje ha sido enviado con exito y puede
               cerrar la session o volver a enviar un mensaje-->
    <section class="form_wrap">

        <section class= "mensaje-exito">
            <h1>SU MENSAJE SE ENVIÓ CON ÉXITO</h1>
            <a href="solicitarProductos.php">Enviar nuevo mensaje</a>
            <br>
            <br>
        
            <a href="../html/loginvista.php">Cerrar Session</a>
        </section>



    </section>

</body>
</html>

<?php
   try{
    $user="root";
    $pass="";
    $server="localhost";
    $db="proveeduria";
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);
    echo "<script>
    alert('Conectado a la base de datos');
</script>";



}
catch(PDOException $e){
    die("Eror al conectarse con Mysql ");
}

include 'enviar.php';


?>