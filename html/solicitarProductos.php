<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de peticion de productos</title>

    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/font-awesome.css">

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>

    <section class="form_wrap">
<!---Este formulario permite enviar solicitudes a los compradores, llenando con nombre
       departamento, correo, telefono y el mensaje que desean enviar-->
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.proveeduria@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +506 72128217</p>
            </section>
        </section>

        <form action="solicitarProductos.php" method="POST" class="form_contact">
            <h2>Solicitud de productos</h2>
            <div class="user_info">

                <label for="cedula">Cedula *</label>
                <input type="text"  name="cedula" required>

                <label for="producto">Ingrese los productos</label>
                <input type="text"  name="producto">

                <label for="precio">Precio productos final*</label>
                <input type="text"  name="precio" required>

                <label for="email">Correo electronico *</label>
                <input type="text"  name="correo" required>
                

                <label for="mensaje">Mensaje *</label> 
                <textarea  name="mensaje" required></textarea>

                

                <input type="submit" name="Insertar" value="Enviar Mensaje"  ><a href= "enviarMensaje.php"></a></input>
            </div>
        </form>

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
echo "<script>
    alert('ingreso a la logica');
</script>";



/*include 'enviar.php';*/



if (isset($_POST['Insertar'])) {
    try {
        $con=mysqli_connect($server,$user,$pass);
        mysqli_select_db($con,$db);
    
        if (isset($_POST['correo']) || isset($_POST['mensaje']) ||
        isset($_POST['precio']) || isset($_POST['cedula']) ||
        isset($_POST['producto'])) {

        $correo = $_POST['correo'];
        $cedula = $_POST['cedula'];
        $precio=$_POST['precio'];
        $producto=$_POST['producto'];
        $mensaje=$_POST['mensaje'];}
    
    
        if ($cedula=="" ) {
            
                echo "<script>
                alert('No se insertaron los datos');
            </script>";
        }else{
            $sql = "INSERT INTO `solicitud`( `id_comprador`, `mensaje_solicitud`, `productos_solicitud`, `precioTotal_solicitud`, `fch_solicitud`)
             VALUES ((select `id_comprador` from comprador where cedula_usuario = '$cedula' ),
              '$mensaje',
               '$producto', 
               $precio,
                '2020/07/31')";
    
    
    
    mysqli_query($con,$sql);
    
    
                echo "<script>
                alert('Se ha creado la solicitud ');
                </script>";
    
    
    
               
    
                
    
    
        }
    } catch (\Throwable $th) {
       echo "<script>
                alert('No se inserto los datos');
            </script>";
    }
        
    
    
    
        }
    
?>
