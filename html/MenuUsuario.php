<?php
$user="root";
$pass="";
$server="localhost";
$db="proveeduria";
$con=mysqli_connect($server,$user,$pass);
mysqli_select_db($con,$db);
echo "<script>
alert('Conectado a la base de datos');
</script>";
session_start();
if(isset($_SESSION['user'])){
$_SESSION['user'];
}

?>


<!DOCTYPE html>
<html lang="en">
<!--Este menu muestra un pequeño menu para el estudiante que muestre los formularios recientes o realizar un formulario.-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Usuario</title>

    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/script.js"></script>
</head>

<body>
    <?php include 'navbarUsuario.php'?>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
            </section>

        </section>
        <form action="" method="" class="form_contact">
            <h7>Bienvenido al menu de usuario, encuentra disponible las funciones de 
                    crear solicitudes y comprobar solicitudes
            </h7
            >

            <br>
            <br>
            <br>
            <br>
            <p>
            <a href="solicitarProductos.php" class="btn btn-primary btn-lg active" role="button"
                aria-pressed="true">Enviar Solicitud</a>
                <p>
            <a href="verificarSolicitud.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Comprobar
                solicitudes</a>
        </form>

    </section>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>