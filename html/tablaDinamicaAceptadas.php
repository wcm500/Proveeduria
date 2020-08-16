
<?php 

/**Aprobador financiero 1 */
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
	LEFT join Solicitud_Aprobada on comprador.id_comprador = Solicitud_Aprobada.id_comprador
	 ");

	 /*select * from usuario 
	RIGHT JOIN comprador on usuario.cedula_usuario = comprador.cedula_usuario
	LEFT join Solicitud_Aprobada on comprador.id_comprador = solicitud.id_comprador */
    if (isset($_POST['id']) || isset($_POST['Estado']) ) {

        $id = $_POST['id'];
        $estado = $_POST['Estado'];}
    

	if(isset($_POST['Modificar'])) {

		$mensaje= $_POST{'mensaje'};
					$correoCliente =$_POST{'correo_cliente'};
					$correoJefe=$_POST{'aprobadorJefe'};

					//Datos para el correo

					$destinatario = "$correoCliente";
					$asunto = "La solicitud fue aceptada";
					$carta = "ID de la solicitud: $id  aceptada\n";
					$carta .= "Aceptada por el aprobador jefe puede contarlo al correo: $correoJefe \n";
					$carta .= "Mensaje: $mensaje \n Saludos";

					//enviando mensaje por correo

					mail($destinatario, $asunto, $carta);
					echo "<script>
									alert('Se ha notificado al cliente de esta decision ');
									</script>";

					
					$mensaje= $_POST{'mensaje'};
					$correoCliente =$_POST{'correo_cliente'};
					$correoJefe=$_POST{'aprobadorJefe'};

					//Datos para el correo

					$destinatario = "aprobadorFinanciero@gmail.com";
					$asunto = "La solicitud fue aceptada";
					$carta = "ID del empleado: $id  aceptada\n";
					$carta = "El correo de contacto al cliente es el siguiente: $correoCliente \n";
					$carta .= "Aceptada por el aprobador jefe puede contarlo al correo: $correoJefe \n";
					
					$carta .= "Mensaje: $mensaje \n Saludos";

					//enviando mensaje por correo

					mail($destinatario, $asunto, $carta);
					echo "<script>
									alert('Se ha notificado al aprobador financiero de esta decision ');
									</script>";
       
    
          
            echo "<h3 align='center'>Solicitud Aceptada.</h3><hr><br>";
          
          
        }

        if(isset($_POST['Eliminar'])) {
            if ((!empty($_POST["id"])) ){
        
              $id_solicitud = $_POST["id"];
              
        
        
              $sql = "insert into solicitud_negada(\n"

              . "				\n"
          
              . "                `id_solicitud`,\n"
          
              . "                `id_comprador`,\n"
          
              . "                `productos_solicitudNegada`,\n"
          
              . "                `preciototal_solicitudNegada`,\n"
          
              . "                `fch_solicitudNegada`)\n"
          
              . "  SELECT\n"
          
              . "  		id_solicitud,\n"
          
              . "        id_comprador,\n"
          
              . "        productos_solicitudAprobada,\n"
          
              . "        preciototal_solicitudAprobada,\n"
          
              . "        fch_solicitudAprobada\n"
          
              . " FROM\n"
          
              . " 		solicitud_aprobada\n"
          
              . "        \n"
          
              . "  WHERE\n"
          
              . "  		id_solicitud = '$id'";
        
              if ($con->query($sql) === TRUE){
                echo "<h3 align='center'>Solicitud Eliminada.</h3><hr><br>";

                $sql2 = "DELETE FROM `solicitud_aprobada` WHERE `id_solicitudAprobada`= '$id'";
                    if ($con->query($sql2) == TRUE) {
                        echo "<h3 align='center'>Solicitud Borrada.</h3><hr><br>";
					}
					
					
					$mensaje= $_POST{'mensaje'};
					$correoCliente =$_POST{'correo_cliente'};
					$correoJefe=$_POST{'aprobadorJefe'};

					//Datos para el correo

					$destinatario = "$correoCliente";
					$asunto = "La solicitud fue rechazada";
					$carta = "ID de la solicitud: $id  rechaza\n";
					$carta .= "Rechaza por el aprobador jefe puede contarlo al correo: $correoJefe \n";
					$carta .= "Mensaje: $mensaje \n Saludos";

					//enviando mensaje por correo

					mail($destinatario, $asunto, $carta);
					echo "<script>
									alert('Se ha notificado al cliente de esta decision ');
									</script>";

					
					$mensaje= $_POST{'mensaje'};
					$correoCliente =$_POST{'correo_cliente'};
					$correoJefe=$_POST{'aprobadorJefe'};

					//Datos para el correo

					$destinatario = "aprobadorFinanciero@gmail.com";
					$asunto = "La solicitud fue rechazada";
					$carta = "ID del empleado: $id  rechaza\n";
					$carta = "El correo de contacto al cliente es el siguiente: $correoCliente \n";
					$carta .= "Rechaza por el aprobador jefe puede contarlo al correo: $correoJefe \n";
					
					$carta .= "Mensaje: $mensaje \n Saludos";

					//enviando mensaje por correo

					mail($destinatario, $asunto, $carta);
					echo "<script>
									alert('Se ha notificado al aprobador financiero de esta decision ');
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
<a href="panelControl_Jefe_Finan.php" class="btn btn-success" name="" value="Volver">Volver</a>
	<br>
	<br>
	<h3 class="text-center text-success" id="message"><?php echo  $success; ?></h3>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Solicitudes <b>Aprobador Financiero</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Aceptar Solicitud</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Rechazar Solicitud</span></a>						
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
                        <th>Codigo de la solicitud aprobada</th>
						<th>Codigo solicitud</th>
						<th>Codigo Comprador</th>
						<th>Productos Aceptados</th>
                        <th>Precio Total</th>
						<th>Fecha de la Aprobacion</th>
						<th>Correo Usuario</th>
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
						<td><?php echo $row["id_solicitudAprobada"]; ?></td>
						<td><?php echo $row["id_solicitud"]; ?></td>
						<td><?php echo $row["id_comprador"]; ?></td>
						<td><?php echo $row["productos_solicitudAprobada"]; ?></td>
						<td><?php echo $row["preciototal_solicitudAprobada"]; ?></td>
						<td><?php echo $row["fch_solicitudAprobada"]; ?></td>
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
				<form method="post" action="tablaDinamicaAceptadas.php">
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
							<input type="text" class="form-control" name="Estado" value="Aceptada">
						</div>

						<div class="form-group">
							<label>Ingrese su correo como aprobador Jefe</label>
							<input type="text" class="form-control" name="aprobadorJefe" place holder="ingrese su correo">
						</div>
						<div class="form-group">
							<label>Ingrese el correo del comprador</label>
							<input type="text" class="form-control" name="correo_cliente" place holder="ingrese el correo del comprador">
						</div>

						<div class="form-group">
							<label>Ingrese el mensaje de la razon del rechazo</label>
							<textarea type="text" class="form-control" name="mensaje" place holder="ingrese la razon"></textarea>
						</div>
						<p class="text-warning"><small>Sera notificado el cliente de esta decision.</small></p>
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
				<form method="post" action="tablaDinamicaAceptadas.php" >
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
							<label>Ingrese su correo como aprobador Jefe</label>
							<input type="text" class="form-control" name="aprobadorJefe" place holder="ingrese su correo">
						</div>
						<div class="form-group">
							<label>Ingrese el correo del comprador</label>
							<input type="text" class="form-control" name="correo_cliente" place holder="ingrese el correo del comprador">
						</div>

						<div class="form-group">
							<label>Ingrese el mensaje de la razon del rechazo</label>
							<textarea type="text" class="form-control" name="mensaje" place holder="ingrese la razon"></textarea>
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