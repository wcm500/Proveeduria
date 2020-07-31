
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">

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

                    if (isset($_POST['buscar'])) {
                        $cedula = $_POST['buscar'];
                        $sql = "SELECT * from solicitud\n"
                         . "where id_comprador in (select `id_comprador` from comprador where cedula_usuario = '$cedula')";
                    }else{
                        echo "<script>
                        alert('Usted no ha hecho ninguna solicitud');
                    </script>";
                    }

                   /* $sql = "SELECT * FROM solicitud";*/

                    $result= mysqli_query($con,$sql);

                ?>

                <center>

                <h3 >Control de ordenes para los solicitantes de los productos en el sistema de proveeduria</h3>
                <h3>Ingrese la cèdula para confirmar su envio</h3>

                </center>
				<form action="" method="POST"> 
                

					<div class="col-md-6">
						<input type="text" name="buscar" class='form-control' placeholder="Buscar por cedula su solicitud" value="" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Buscar</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Codigo Solicitud</th>
						<th>Codigo Comprador</th>
						<th>Mensaje de la solicitud</th>
                        <th>Productos de la solicitud</th>
                        <th>Precio Solicitud</th>
						<th>Fecha Solicitud</th>
						
					</tr>

                    <?php
                        while($row = mysqli_fetch_object($result)){?>
					<tr>
						<td><?php echo $row->id_solicitud ?></td>
						<td><?php echo $row->id_comprador ?></td>
						<td><?php echo $row->mensaje_solicitud ?></td>
                        <td><?php echo $row->productos_solicitud ?></td>
						<td><?php echo $row->precioTotal_solicitud ?></td>
                        <td><?php echo $row->fch_solicitud ?></td>
					</tr>
                    <?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>