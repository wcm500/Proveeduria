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

$result = mysqli_query($con,"SELECT * FROM USUARIO");

/** Cambiar los campos para los de solicitud correspondiente para
 *     Aceptar y rechazar la s solicitudes desde el aprobador financiero y luego
 *      notificarle al aprobador jefe 
*/

if (isset($_POST['correo']) || isset($_POST['contrasena']) ||
 isset($_POST['cedula']) || isset($_POST['rol']) ||
isset($_POST['Nombre']) || isset($_POST['apellido']) ||
isset($_POST['apellido2']) || isset($_POST['telefono'])) {

$correo = $_POST['correo'];
$rol = $_POST['rol'];
$cedula = $_POST['cedula'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['apellido'];
$segundo_apellido=$_POST['apellido2'];
$telefono=$_POST['telefono'];}




/**Ahora para insertar dependiendo del boton que se escoge si aceptar, solicitud aprobada momentaneamente, si es rechazada solicitudes rechazadas */


$success  = "";
	$existe = 0;
    if (isset($_POST['insertar'])) {
        try {
            $con=mysqli_connect($server,$user,$pass);
			mysqli_select_db($con,$db);

			
			
			$resultados = mysqli_query($con, "SELECT * FROM USUARIO WHERE CEDULA_USUARIO = '$cedula'");
			while ($consulta = mysqli_fetch_array($resultados)) {
				echo $consulta['correo_usuario']."<br>";
				echo $consulta['contrasena_usuario']."<br>";
				echo $consulta['nombre_usuario']."<br>";
				echo $consulta['segundo_apellido_usuario']."<br>";
				echo $consulta['telefono_usuario']."<br>";
				echo $consulta['primer_apellido_usuario']."<br>";
				echo $consulta['rol_usuario']."<br>";
				
				
				$existe ++;

				echo "<script>
				alert('Él usuario ya existe, no se puede ingresar');
			</script>";
				
		
		
			}if ($existe == 0) {
				
					echo "<script>
					alert('');
				</script>";


				
				if ($correo=="" || $cedula=="" || $contrasena=="" || $nombre=="" ||
                $apellido==""  || $segundo_apellido=="" || $telefono=="" || $rol == "") {
                
                    echo "<script>
                    alert('No se insertaron los datos');
                </script>";
            }else{
                mysqli_query($con, "INSERT INTO USUARIO 
                    (`correo_usuario`, `contrasena_usuario`, `rol_usuario`, 
                    `cedula_usuario`, `nombre_usuario`, `primer_apellido_usuario`, 
                    `segundo_apellido_usuario`, `telefono_usuario`) 
                    VALUES
                    ('$correo',
                    '$contrasena',
					'$rol',
                    '$cedula',
                    '$nombre',
                    '$apellido',
                    '$segundo_apellido',
                    '$telefono')");
        
        $success    =   "Nuevo!";
        
        
            }
				
			}
		
        
        } catch (\Throwable $th) {
           echo "<script>
                    alert('No se inserto los datos');
                </script>";
        }
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Control de reportes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesTablas.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    

    /* Estilos para la ventanas de estilos en cuantos al css para los diferentes displays*/	
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}

.nav-link {
    color: #4a5568;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>

<table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Nombre</th>
						<th>Primer Apellido</th>
						<th>Segundo Apellido</th>
						<th>Correo</th>
                        <th>Telefono</th>
						<th>Cedula</th>
						<th>Rol</th>
                        <th>Contraseña</th>
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
						<td><?php echo $row["nombre_usuario"]; ?></td>
						<td><?php echo $row["primer_apellido_usuario"]; ?></td>
						<td><?php echo $row["segundo_apellido_usuario"]; ?></td>
						<td><?php echo $row["correo_usuario"]; ?></td>
						<td><?php echo $row["telefono_usuario"]; ?></td>
						<td><?php echo $row["rol_usuario"]; ?></td>
						<td><?php echo $row["cedula_usuario"]; ?></td>
						<td><?php echo $row["contrasena_usuario"]; ?></td>
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


                <div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="tablaDinamica.php">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="Nombre" placeholder="Enter nombre" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" class="form-control" name="correo" placeholder="Enter correo" required>
						</div>
						<div class="form-group">
							<label>Primer Apellido</label>
							<textarea class="form-control" name="apellido" placeholder="Enter primer apellido" required></textarea>
						</div>
						<div class="form-group">
							<label>Segundo Apellido</label>
							<input type="text" class="form-control" name="apellido2" placeholder="Enter segundo apellido" required>
						</div>		
						<div class="form-group">
							<label>Telefono</label>
							<input type="text" class="form-control" name="telefono" placeholder="Enter telefono" required>
						</div>	
						<div class="form-group">
							<label>Cedula</label>
							<input type="text" class="form-control" name="cedula" placeholder="Enter cedula" required>
						</div>	
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" class="form-control" name="contrasena" placeholder="Enter contraseña" required>
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="insertar" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="tablaDinamica.php">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Empleado</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
					<div class="modal-body">
					<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="Nombre" placeholder="Enter nombre" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" class="form-control" name="correo" placeholder="Enter correo" required>
						</div>
						<div class="form-group">
							<label>Primer Apellido</label>
							<textarea class="form-control" name="apellido" placeholder="Enter primer apellido" required></textarea>
						</div>
						<div class="form-group">
							<label>Segundo Apellido</label>
							<input type="text" class="form-control" name="apellido2" placeholder="Enter segundo apellido" required>
						</div>		
						<div class="form-group">
							<label>Telefono</label>
							<input type="text" class="form-control" name="telefono" placeholder="Enter telefono" required>
						</div>	
						<div class="form-group">
							<label>Cedula</label>
							<input type="text" class="form-control" name="cedula" placeholder="Enter cedula" required>
						</div>	
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" class="form-control" name="contrasena" placeholder="Enter contraseña" required>
						</div>						
									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" name = "Editar" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="index.php" >
					<div class="modal-header">						
						<h4 class="modal-title">Eliminar Empleado</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Seguro de eliminar ese empleado?</p>
						<div class="form-group">
							<label>Cedula</label>
							<input type="text" class="form-control" name="cedula" placeholder="Ingrese la cedula para confirmar" required>
						</div>
						<p class="text-warning"><small>Esta accion no se puede devolver.</small></p>
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

<div class="container">
<!--Formulario que muestra los usuarios dentro de sus reportes para mostrar los reportes realizados anteriormente-->
      
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="paneldeReportes.html">Resgistro de reportes</a></li>
          
          <li class="breadcrumb-item active" aria-current="page">Ultimo Reporte</li>
        </ol>
      </nav>
      

      <div class="row gutters-sm">
        <div class="col-md-4 d-none d-md-block">
          <div class="card">
            <div class="card-body">
              <nav class="nav flex-column nav-pills nav-gap-y-1">
                <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Solicitud Reciente
                </a>
              
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header border-bottom mb-3 d-flex d-md-none">
              <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                <li class="nav-item">
                  <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                </li>
              </ul>
            </div>
            <div class="card-body tab-content">
              <div class="tab-pane active" id="profile">
                <h6>Informacion de los reportes</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="fullName">Nombre completo</label>
                    <input type="text" class="form-control" id="fullName" aria-describedby="fullNameHelp"  value="Sofia Villalobos" readonly>
                    <small id="fullNameHelp" class="form-text text-muted">Este es tu nombre del sistema.</small>
                  </div>
                  
                  <div class="form-group">
                    <label for="bio">Mensaje</label>
                    <textarea class="form-control autosize" id="bio"  style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;" readonly>Productos necesarios para limpieza: tronex 500 ml, gracias.</textarea >
                  </div>
                  <div class="form-group">
                    <label for="url">Telefono</label>
                    <input type="text" class="form-control" id="url" value="72128217" readonly>
                  </div>
                  <div class="form-group">
                    <label for="url">Departamento</label>
                    <input type="text" class="form-control" id="departamento" value="Limpieza " readonly>
                  </div>
                  <div class="form-group">
                    <label for="location">Correo Electronico</label>
                    <input type="text" class="form-control" id="location"  value="vsofi123@gmail.com" readonly>
                  </div>
                  <div class="form-group small text-muted">
                   
                  </div>
                  <div class="form-group">
                    <label for="bio">Comentarios</label>
                    <textarea class="form-control autosize" id="comentario"  placeholder = "Agregue un comentario "style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;" ></textarea >
                      <h7>Agregue algun comentario, si esta es acepta y rechazada con los motivos de la razón, ademas sera notificado al cliente y administrador jefe.</h7>
                  </div>
                  <button type="button" class="btn btn-success">Aceptar</button>
                  
                  <button type="button" class="btn btn-danger">Rechazar</button>
                  
                </form>
              </div>

             
    </div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	

</script>
</body>
</html>