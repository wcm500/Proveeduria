<?php 
	$success="";
	$user="root";
    $pass="";
    $server="localhost";
    $db="proveeduria";
    $con=mysqli_connect($server,$user,$pass);
    mysqli_select_db($con,$db);
    echo "<script>
    alert('Conectado a la base de datos');
</script>";
	$result = mysqli_query($con,"select * from usuario 
	RIGHT JOIN comprador on usuario.cedula_usuario = comprador.cedula_usuario
	LEFT join solicitud on comprador.id_comprador = solicitud.id_comprador and solicitud.precioTotal_solicitud BETWEEN 1000000 and 100000000");
/**$sql = "UPDATE `solicitud` SET `status_solicitud`= \'Acepatada\' WHERE id_solicitud =1"; */
if (isset($_POST['id']) || isset($_POST['Estado']) ) {

	$id = $_POST['id'];
	$estado = $_POST['Estado'];}

	

if(isset($_POST['Modificar'])) {
	if ((!empty($_POST["id"])) ){

	  $id_solicitud = $_POST["id"];
	  


	  $sql = "insert into `solicitud_aprobada`(\n"

	  . "    fch_solicitudAprobada,\n"
  
	  . "    id_comprador,\n"
  
	  . "    id_solicitud,\n"
  
	  . "    precioTotal_solicitudAprobada,\n"
  
	  . "    productos_solicitudAprobada)\n"
  
	  . "                               \n"
  
	  . "select fch_solicitud,\n"
  
	  . "		id_comprador,\n"
  
	  . "        id_solicitud,\n"
  
	  . "        precioTotal_solicitud,\n"
  
	  . "       \n"
  
	  . "        productos_solicitud\n"
  
	  . "\n"
  
	  . "from solicitud\n"
  
	  . "where id_solicitud = '$id'";

	  if ($con->query($sql) === TRUE){
		echo "<h3 align='center'>Solicitud Aceptada.</h3><hr><br>";

		
		$correo= $_POST{'correo'};
		$mensaje= $_POST{'mensaje'};

		//Datos para el correo

		$destinatario = "aprobadorFinanciero@gmail.com";
		$asunto = "La solicitud fue aprobada";
		$carta = "ID del empleado: $id  Aprobada\n";
		$carta .= "Correo: $correo \n";
		
		$carta .= "Mensaje: $mensaje \n + Saludos";

		//enviando mensaje por correo

		mail($destinatario, $asunto, $carta);
		echo "<script>
						alert('Se ha notificado al aprobador financiero ');
						header('Location: panelControl_Aprob_Finan2.php');
						</script>";

		
	  }
	  else{
		echo "<h3 align='center'>Error en la Base de datos a la hora de modificar.</h3><hr><br>";
	  }
	}
  }
  if(isset($_POST['Eliminar'])) {
	if ((!empty($_POST["id"])) ){

	  $id_solicitud = $_POST["id"];
	  


	  $sql = "INSERT INTO solicitud_negada(\n"

	  . "			fch_solicitudNegada,\n"
  
	  . "			id_comprador,\n"
  
	  . "    		id_solicitud,\n"
  
	  . "			precioTotal_solicitudNegada,\n"
  
	  . "			productos_solicitudNegada)\n"
  
	  . "SELECT\n"
  
	  . "		fch_solicitud,\n"
  
	  . "        id_comprador,\n"
  
	  . "        id_solicitud,\n"
  
	  . "        precioTotal_solicitud,\n"
  
	  . "        productos_solicitud\n"
  
	  . "FROM \n"
  
	  . "	solicitud\n"
  
	  . "where id_solicitud = '$id'";

	  if ($con->query($sql) === TRUE){
		echo "<h3 align='center'>Solicitud Rechazada.</h3><hr><br>";



		$correo= $_POST{'correo'};
		$mensaje= $_POST{'mensaje'};
		$correoCliente =$_POST{'correo_cliente'};

		//Datos para el correo

		$destinatario = "$correoCliente";
		$asunto = "La solicitud fue rechazada";
		$carta = "ID del empleado: $id  rechaza\n";
		$carta .= "Correo: $correoCliente \n";
		
		$carta .= "Mensaje: $mensaje \n Saludos";

		//enviando mensaje por correo

		mail($destinatario, $asunto, $carta);
		echo "<script>
						alert('Se ha notificado al cliente de esta decision ');
						header('Location: panelControl_Aprob_Finan2.php');
						</script>";
	  }
	  else{
		echo "<h3 align='center'>Error en la Base de datos a la hora de modificar.</h3><hr><br>";
	  }
	}
  }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/stylesTablas.css">

</head>
<body>

        <!-- Fin sidebar -->
		<a href="panelControl_Aprob_Finan.php" class="btn btn-success" name="" value="Volver">Volver</a>
        <div class="w-100">

         <!-- Navbar -->

        
	<br>
	<br>
	<?php$success = '';?>
	<br>
	<br>

	<h3 class="text-center text-success" id="message"><?php echo  $success; ?></h3>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manejo <b>Usuarios</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Aceptar</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Rechazar</span></a>						
					</div>
                </div>
			</div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>ID Solicitud</th>
						<th>Codigo Comprador</th>
						<th>Mensaje Solicitud</th>
						<th>Productos Solicitud</th>
                        <th>Precio Solicitud</th>
						<th>fecha solicitud</th>
						<th>Correo usuario</th>
						
						
                    </tr>
                </thead>
                <tbody>
				<?php
                while($row = mysqli_fetch_array($result))
                {
                ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $row["id_solicitud"]; ?></td>
						<td><?php echo $row["id_comprador"]; ?></td>
						<td><?php echo $row["mensaje_solicitud"]; ?></td>
						<td><?php echo $row["productos_solicitud"]; ?></td>
						<td><?php echo $row["precioTotal_solicitud"]; ?></td>
						<td><?php echo $row["fch_solicitud"]; ?></td>
						<td><?php echo $row["correo_usuario"]; ?></td>
						
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                <?php 
                    } 
                ?>
				<?php
				
					// close connection database
					mysqli_close($con);
                ?>
                </tbody>
            </table>
		
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="tablaDinamicaSolicitudes.php">
					<div class="modal-header">						
						<h4 class="modal-title">Aceptar Solicitud</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>ID Solicitud</label>
							<input type="text" class="form-control" name="id" placeholder="Entre la solicitud" >
						</div>
						<div class="form-group">
							<label>Estado Solicitud</label>
							<input type="text" class="form-control" name="Estado" value="Aceptada" readonly>
						</div>
						<div class="form-group">
							<label>Ingrese su correo</label>
							<input type="text" class="form-control" name="correo" place holder="ingrese su correo">
						</div>
						<div class="form-group">
							<label>Ingrese un mensaje </label>
							<input type="text" class="form-control" name="mensaje" place holder="ingrese su mensaje">
						</div>
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="Modificar" value="Aceptar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->

	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="#" >
					<div class="modal-header">						
						<h4 class="modal-title">Rechazar Solicitud</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>ID Solicitud</label>
							<input type="text" class="form-control" name="id" placeholder="Entre la solicitud" >
						</div>
						<div class="form-group">
							<label>Estado Solicitud</label>
							<input type="text" class="form-control" name="Estado" value="Rechazada" readonly>
						</div>
						<div class="form-group">
							<label>Ingrese su correo</label>
							<input type="text" class="form-control" name="correo" place holder="ingrese su correo">
						</div>
						<div class="form-group">
							<label>Ingrese el correo del cliente</label>
							<input type="text" class="form-control" name="correo_cliente" place holder="ingrese el correo del comprador">
						</div>
						<div class="form-group">
							<label>Ingrese un mensaje </label>
							<input type="text" class="form-control" name="mensaje" place holder="ingrese su mensaje">
						</div>
						<p class="text-warning"><small>Sera notificado el cliente de esta decision.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" name = "Eliminar" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>

<script src="javascript.js"></script>

</body>
</html>    